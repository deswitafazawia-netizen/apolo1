<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

        <div class="payment-wrapper">

            <div class="payment-card">

                <h2>Pembayaran DP</h2>
                <p>Silakan lakukan pembayaran uang muka (DP) untuk mengonfirmasi pemesanan.</p>

                <form action="<?= base_url('dashboard/pembayaran/simpan') ?>" method="post" enctype="multipart/form-data">

                    <?= csrf_field() ?>

                    <input type="hidden"
                        name="id_pemesanan"
                        value="<?= $pemesanan['id_pemesanan'] ?>">

                    <div class="form-group">
                        <label>Jenis Pembayaran</label>

                        <select name="jenis_pembayaran" id="jenisPembayaran" required>

                            <option value="">-- Pilih --</option>

                            <option value="DP">
                                Bayar DP
                            </option>

                        </select>

                    </div>

                    <div class="form-group">

                        <label>Metode Pembayaran</label>

                        <select name="metode_pembayaran"
                                id="metodePembayaran"
                                onchange="metodeBayar()"
                                required>

                            <option value="">-- Pilih Metode --</option>

                            <option value="Transfer">
                                Transfer
                            </option>

                            <option value="Tunai">
                                Tunai
                            </option>

                        </select>

                    </div>

                    <div id="transferArea" style="display:none;">

                        <div class="rekening-box">

                            <h4>Transfer ke Rekening</h4>

                            <p><strong>Bank BCA</strong></p>

                            <p>1234567890</p>

                            <p>a.n. Komunitas Apolo</p>

                        </div>

                        <div class="form-group">

                            <label>Upload Bukti Transfer</label>

                            <input type="file"
                                name="bukti_transfer">

                        </div>

                    </div>

                    <div id="tunaiArea" style="display:none;">

                        <div class="info-box">

                            <p>
                                Pembayaran dilakukan secara tunai kepada photografer
                                pada saat pertemuan sesuai kesepakatan.
                            </p>

                        </div>

                    </div>

                    <button type="submit" class="btn-pay">

                        Kirim Pembayaran

                    </button>

                </form>

            </div>

        </div>

        <script>

        function metodeBayar(){

            let metode = document.getElementById('metodePembayaran').value;

            if(metode=="Transfer"){

                document.getElementById('transferArea').style.display="block";
                document.getElementById('tunaiArea').style.display="none";

            }else if(metode=="Tunai"){

                document.getElementById('transferArea').style.display="none";
                document.getElementById('tunaiArea').style.display="block";

            }else{

                document.getElementById('transferArea').style.display="none";
                document.getElementById('tunaiArea').style.display="none";

            }

        }

        </script>

<?= $this->endSection() ?>