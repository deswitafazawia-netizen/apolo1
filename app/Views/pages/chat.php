<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="chat-wrapper">
    <div class="chat-container">

        <div class="chat-header">
            <div class="chat-header-left">
                <?php if ($chat_with === 'photografer') : ?>
                <img src="<?= base_url('uploads/profil/' . ($photografer['foto'] ?: 'default.png')) ?>" alt="">
                <div>
                    <h3><?= esc($photografer['nama_photografer']) ?></h3>
                    <span>Photografer</span>
                </div>
                <?php else : ?>
                <img src="<?= base_url('uploads/profil/' . ($pelanggan['foto'] ?: 'default.png')) ?>" alt="">
                <div>
                    <h3><?= esc($pelanggan['nama_pelanggan']) ?></h3>
                    <span>Pelanggan</span>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="chat-body" id="chatBody">
            <?php if (!empty($messages)) : ?>
                <?php foreach ($messages as $msg) : ?>
                    <?php 
                        $role = session()->get('role');
                        $isMine = ($msg['pengirim'] === 'pelanggan' && $role === 'pelanggan') || 
                                  ($msg['pengirim'] === 'photografer' && $role === 'photografer');
                    ?>
                    <div class="message <?= $isMine ? 'message-sent' : 'message-received' ?>">
                        <div class="message-content">
                            <p><?= esc($msg['pesan']) ?></p>
                            <span class="message-time"><?= date('H:i', strtotime($msg['waktu'])) ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="chat-empty">
                    <i class="fa-solid fa-comment-dots"></i>
                    <p>Belum ada pesan. Mulai percakapan!</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="typing-indicator" id="typingIndicator">
            <span></span><span></span><span></span>
            <small>Sedang mengetik...</small>
        </div>

        <form class="chat-form" id="chatForm">
            <?= csrf_field() ?>
            <input type="hidden" name="chat_id" value="<?= $chat_id ?>">
            <div class="chat-input-wrapper">
                <input type="text" name="pesan" id="pesanInput" placeholder="Ketik pesan..." required autocomplete="off">
                <button type="submit">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </form>

    </div>
</div>

<script>
const chatId = <?= $chat_id ?>;
const chatBody = document.getElementById('chatBody');
const chatForm = document.getElementById('chatForm');
const pesanInput = document.getElementById('pesanInput');
const typingIndicator = document.getElementById('typingIndicator');
let lastId = 0;
let typingTimer = null;

// Inisialisasi lastId dari pesan yang sudah ada
document.querySelectorAll('.message').forEach(msg => {
    const timeEl = msg.querySelector('.message-time');
    if (timeEl) lastId = Math.max(lastId, parseInt(timeEl.dataset.id) || 0);
});

// Kirim pesan via AJAX
chatForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const pesan = pesanInput.value.trim();
    if (!pesan) return;

    const formData = new FormData();
    formData.append('chat_id', chatId);
    formData.append('pesan', pesan);
    formData.append('<?= csrf_token() ?>', '<?= csrf_hash() ?>');

    fetch('<?= base_url('dashboard/chat/kirim-ajax') ?>', {
        method: 'POST',
        body: formData
    }).then(r => r.json()).then(() => {
        pesanInput.value = '';
        chatBody.scrollTop = chatBody.scrollHeight;
        stopTyping();
    });
});

// Polling pesan baru
function pollMessages() {
    fetch('<?= base_url('dashboard/chat/polling') ?>?chat_id=' + chatId)
        .then(r => r.json())
        .then(messages => {
            const empty = chatBody.querySelector('.chat-empty');
            if (empty && messages.length > 0) empty.remove();

            let newCount = 0;
            messages.forEach(msg => {
                if (msg.id > lastId) {
                    lastId = msg.id;
                    const div = document.createElement('div');
                    div.className = 'message ' + (msg.isMine ? 'message-sent' : 'message-received');
                    div.innerHTML = `<div class="message-content">
                        <p>${escapeHtml(msg.pesan)}</p>
                        <span class="message-time">${msg.waktu}</span>
                    </div>`;
                    chatBody.appendChild(div);
                    newCount++;
                }
            });
            if (newCount > 0) {
                chatBody.scrollTop = chatBody.scrollHeight;
            }
        });
}

// Cek typing indicator
function checkTyping() {
    fetch('<?= base_url('dashboard/chat/is-typing') ?>?chat_id=' + chatId)
        .then(r => r.json())
        .then(data => {
            typingIndicator.classList.toggle('show', data.typing);
        });
}

// Kirim sinyal typing
function sendTyping() {
    const formData = new FormData();
    formData.append('chat_id', chatId);
    formData.append('<?= csrf_token() ?>', '<?= csrf_hash() ?>');
    fetch('<?= base_url('dashboard/chat/typing') ?>', {
        method: 'POST',
        body: formData
    });
}

function stopTyping() {
    const formData = new FormData();
    formData.append('chat_id', chatId);
    formData.append('<?= csrf_token() ?>', '<?= csrf_hash() ?>');
    fetch('<?= base_url('dashboard/chat/stop-typing') ?>', {
        method: 'POST',
        body: formData
    });
}

// Event typing
pesanInput.addEventListener('input', function() {
    if (this.value.trim()) {
        sendTyping();
        clearTimeout(typingTimer);
        typingTimer = setTimeout(stopTyping, 2000);
    } else {
        stopTyping();
    }
});

// Escape HTML
function escapeHtml(text) {
    const d = document.createElement('div');
    d.textContent = text;
    return d.innerHTML;
}

// Auto-scroll awal
chatBody.scrollTop = chatBody.scrollHeight;

// Interval polling
setInterval(pollMessages, 2000);
setInterval(checkTyping, 2000);
</script>

<?= $this->endSection() ?>
