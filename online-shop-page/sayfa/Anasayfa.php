<?php require_once 'inc/ust.php'; ?>

</head>

<body>
    <?php require_once 'inc/slide.php'; ?>
    <main>
        <?php require_once 'inc/navbar.php'; ?>
        <!-- Content wrapper -->
        <div class="content-wrapper">

            <!-- Content -->
            <div class="layout-page">
                <!-- -------------------------------------------------------------------------------------İÇERİK -->
                <!-- MODAL -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-css" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="col-6">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                </div>
                                <div class="col-6 text-end ">
                                    <button type="button" class="btn-close text-reset"
                                        onclick="$('#exampleModal').modal('hide');" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                            <div class="modal-body" id="duzenle">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 p-5">


                    <table class="table table-striped" style="width:100%" id="tablo">
                        <thead>
                            <tr>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    GÖRSEL</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    KİTAP ADI</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    KİTAP YAZARI</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    AÇIKLAMA</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    FİYAT</th>

                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $db->sql = "SELECT * 
    FROM kitaplar
    ORDER BY id DESC";
                            $kitap = $db->select();
                            if ($kitap) {
                                foreach ($kitap as $key => $value) { ?>
                                    <tr>

                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0"> <img
                                                    src="uploads/kitap_gorsel<?php echo $value->id; ?>.jpg" width="70%"></p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0"><?php echo $value->kitap_adi; ?></p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0"><?php echo $value->kitap_yazari; ?></p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0"><?php echo $value->kitap_aciklama; ?></p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0 ">
                                                <?php echo number_format($value->kitap_fiyat); ?> TL
                                            </p>
                                        </td>


                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" onclick=" 
               $('#exampleModal').modal('show');
               $('#exampleModalLabel').text('Alışverişe Devam Et...');
             $('#duzenle').load('index.php?url=ajax/detay&id=<?php echo $value->id; ?>');
               " href="javascript:void(0);"><i class='bx bxs-comment-detail'></i> Detaylı Göz At...</a>

                                                </div>
                                            </div>
                                        </td>





                                    </tr>

                                <?php }
                            }

                            ?>


                        </tbody>
                    </table>



                </div>
            </div>

            <?php require_once 'inc/footer.php'; ?>
    </main>
    </div>
    </div>
    </div>

    <?php require_once 'inc/alt.php'; ?>
    <script>
        $(document).ready(function () {
            var table = $('#tablo').DataTable({
                lengthChange: false,
                lengthMenu: true,
                responsive: true,
                dom: 'Bfrtip',
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/tr.json', // Türkçe dil dosyası
                    search: "Arama:", // Arama metni
                    emptyTable: "Tabloda veri bulunmuyor", // Tablo boşken gösterilecek metin
                    info: "_TOTAL_ kayıttan _START_ - _END_ arası görüntüleniyor", // Sayfalama bilgisi
                    infoEmpty: "Kayıt yok", // Boş bilgi mesajı
                    infoFiltered: "(_MAX_ kayıttan filtrelendi)", // Filtreleme bilgisi
                    lengthMenu: "Göster _MENU_ kayıt", // Kayıt sayısı menüsü
                    loadingRecords: "Yükleniyor...", // Yükleniyor metni
                    processing: "İşleniyor...", // İşleniyor metni
                    searchPlaceholder: "Aramak istediğiniz kitabı giriniz...", // Placeholder metni
                    zeroRecords: "Eşleşen kayıt bulunamadı", // Kayıt bulunamadığında gösterilecek metin
                    paginate: {
                        first: "İlk", // İlk sayfa
                        last: "Son", // Son sayfa
                        next: "Sonraki", // Sonraki sayfa
                        previous: "Önceki" // Önceki sayfa
                    }
                },
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10 Satır', '25 Satır', '50 Satır', 'Tümü']
                ],
                "initComplete": function (settings, json) {
                    $('#loading').hide();

                    // Search input'a placeholder ekleme

                    $('#tablo_filter input').attr('placeholder', 'Aramak istediğiniz kitabı giriniz...');

                },

                buttons: [

                ]
            });

        });
    </script>
</body>


</html>