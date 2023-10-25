@extends('models')

@section('content-body')
    <div class="modal fade" id="exampleModalLg" data-bs-focus="false" tabindex="-1" aria-labelledby="exampleModalLgLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">

            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLgLabel">Gestion des clients de garde
                    </h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class=" row ">
                        <div class=" col-sm-1" style="padding-left: 1rem;  padding-top: 1.5rem;">
                            <i class='bx bxs-info-circle  fs-10' style='color:#696969; font-size:16pt'
                                data-bs-toggle="tooltip" data-bs-custom-class="tooltip-light" data-bs-placement="bottom"
                                title="Les données affichées sont fonctions de la période de garde."></i>

                        </div>
                        <div class="col-xl-3 col-sm-3 mb-2">
                            <p for="input-label" class="mb-0 text-muted">Période de garde : </p>
                            <input type="text" name="daterange" class="form-control"
                                style="width: 14em !important; padding :6px" id="daterange">
                        </div>
                        <div class="col-xl-6 col-sm-6 mb-2">
                            <p for="input-label" class="mb-0 text-muted">Client : </p>

                            <select class="js-example-basic-multiple form-control" name="listeClient[]" id="listeClient"
                                multiple="multiple">
                                <option value="">Selectionner le client</option>
                                @foreach ($listeClient as $item)
                                    <option value="{{ $item->IDCLIENT }}">{{ $item->NomClient }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-2 col-sm-2 mb-2 float-end " style="padding-top: 1.2rem; padding-left: 5rem ;"
                            id="zoneAdd">
                            {{-- <button class=" btn btn-primary" id=""><i class="ri-restart-line"></i></i></button> --}}
                            <button class=" btn btn-secondary pb-1" id="addGarde" title=" Ajouter un client de garde"><i
                                    class='bx bx-plus-medical'></i></button>

                        </div>
                        <div class="col-xl-2 mb-2 float-end d-none" style="padding-top: 1.2rem; padding-left: 1rem ;"
                            id="zoneUpdate">
                            {{-- <button class=" btn btn-primary" id=""><i class="ri-restart-line"></i></i></button> --}}
                            <span class=" d-flex justify-content-between">
                                <button class=" btn btn-warning pb-1" id="updateGarde"
                                    title=" Ajouter un client de garde"><i
                                        class='bx bx-check-double fw-bolder fs-15'></i></button>
                                <button class=" btn btn-danger pb-1" id="anulUpdate" title=" Ajouter un client de garde"><i
                                        class='bx bx-x fw-bolder fs-15'></i></button>

                            </span>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class=" offset-xl-8 col-4 mb-2 float-end" style="padding-left: 11.4rem !important;">
                            <i class="ri-file-excel-2-fill fs-32 text-success" title=" Exporter en excel"></i>
                            <i class='bx bxs-file-pdf fs-32 text-danger' title=" Exporter en PDF"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-striped text-nowrap w-100" id="tableclient">
                                <thead class="bg-primary">
                                    <tr class="text-light">
                                        <th class=" text-center">Action</th>
                                        <th class=" text-center">Debut de garde</th>
                                        <th class=" text-center">Fin de garde</th>
                                        <th class=" text-center">Client</th>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody> --}}
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


    {{-- Toastr --}}
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="notification" class="toast colored-toast " role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header text-fixed-white" id="notif-header">
                <img class="bd-placeholder-img rounded me-2" src="../assets/images/brand-logos/toggle-dark.png"
                    alt="...">
                <strong class="me-auto" id="notif-title">Notification</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="notif-body">
                Your,toast message here.
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // config

            document.querySelector('input[name="daterange"]').value = new Date() + ' ' + new Date()

            $('input[name="daterange"]').daterangepicker({
                "locale": {
                    "format": "DD/MM/YYYY",
                    "separator": " - ",
                    "applyLabel": "Appliquer",
                    "cancelLabel": "Annuler",
                    "fromLabel": "From",
                    "toLabel": "To",
                    "customRangeLabel": "Custom",
                    "weekLabel": "W",
                    "daysOfWeek": [
                        "Dim",
                        "Lun",
                        "Mar",
                        "Mer",
                        "Jeu",
                        "Ven",
                        "Sam"
                    ],
                    "monthNames": [
                        "Janvier",
                        "Fevrier",
                        "Mars",
                        "Avril",
                        "Mai",
                        "Juin",
                        "Juillet",
                        "Août",
                        "Septembre",
                        "Octobre",
                        "Novembre",
                        "Decembre"
                    ],
                    "firstDay": 2
                },
                opens: 'center'
            }, function(start, end, label) {
                // console.log("A new date selection was made: " + start.format() + ' to ' + end);
            })

            $('#notification').on('hidden.bs.toast', function() {
                // console.log(types)
                _("notif-header").classList.remove("bg-" + types)
                _("notification").classList.remove("bg-" + types + "-transparent")
                $("#notif-title").text("")
                $("#notif-body").text("")
            })

            // select2 parameter
            $('.js-example-basic-multiple').select2({
                dropdownParent: $("#exampleModalLg")
            });

            var table = $("#tableclient").DataTable({
                language: {
                    dom: 'Bfrtip',
                    processing: false,

                    lengthMenu: "Afficher :&nbsp; _MENU_ &eacute;l&eacute;ments",
                    info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    infoPostFix: "",
                    loadingRecords: "Chargement en cours...",
                    zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    emptyTable: "Aucune donnée disponible dans le tableau",

                    paginate: {
                        first: "",
                        previous: "Pr&eacute;c&eacute;dent",
                        next: "Suivant",
                        last: ""
                    },
                    aria: {
                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    },
                    search: "Rechercher&nbsp;:",
                },
                columnDefs: [{
                    targets: [0, 1, 2],
                    className: 'text-center'
                }],
                // pagingType: 'full_numbers',
                pageLength: 10,
            })

            // VARIABLE
            var dateDebut = ""
            var dateFin = ""
            var types = ""
            var idGarde = ""

            // CHAREMENT DE LA LISTE DANS LE MODAL
            listeGarde(dateConstruct($('input[name="daterange"]').val()))
            listeClient()

            // ouverture du modal
            $("#exampleModalLg").modal("show")

            // TRAITEMENTS

            $('input[name="daterange"]').change(function() {
                listeGarde(dateConstruct($('input[name="daterange"]').val()))
            })

            $("#addGarde").click(function() {

                $.ajax({
                    url: "{{ route('addClientGarde') }}",
                    method: "post",
                    dataType: "json",
                    data: {
                        _token: '{{ csrf_token() }}',
                        dateInterval: dateConstruct($('input[name="daterange"]').val()),
                        clients: $("#listeClient").val()
                    },
                    success: function(response, statut) {
                        // console.log(response)

                        if (response.error != false) {
                            notif("danger", "Attention", "Erreur lors de l'enregistrement")
                            return 0
                        }

                        notif("success", "Success !!", "Ajout effectué avec success")
                        listeGarde(dateConstruct($('input[name="daterange"]').val()))
                        listeClient()
                        $("#listeClient").val("")
                        $(".select2-selection__rendered").html("")
                    },
                    error: function(response, statut) {
                        console.log(response)
                    }
                })
            })

            $("#tableclient tbody").on("click", ".btn-trash", function(evt) {
                var id = $(this)[0].id.split("-")[1]

                alert(id, alertAjax)
            })

            function alertAjax(id) {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('deleteClientGarde') }}',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}",
                        mdp: document.getElementById('swal2-input').value,
                        idClientGarde: id
                    },
                    success: function(response) {
                        console.log(response)
                        if (response.error == false) {
                            if (response.ok == false) {
                                Swal.fire(
                                    'Vous n\'avez pas le droit de suppression !',
                                    '', 'warning')
                                return 0;
                            }

                            if (response.data == 0) {
                                notif("warning", "Attention !",
                                    "Suppression non éffectuée !!")
                                return 0;
                            }

                            listeGarde(dateConstruct($(
                                    'input[name="daterange"]')
                                .val()))
                            notif("success", "Success !",
                                "Suppression éffectuée avec success !!")
                            return 0;
                        }

                        notif("danger", "Attention !",
                            "Une erreur est survénue !!")
                    },
                    error: function(response) {
                        console.log(response)
                    }
                })
            }

            $("#tableclient tbody").on("click", ".btn-edit", function(evt) {

                var id = $(this)[0].id.split("-")[1]

                var idclient = $(this).attr("data_id")
                    idGarde = $(this).attr("data_id2")
                dateDebut = $("#debut-" + id).text()
                dateFin = $("#fin-" + id).text()

                // console.log(dateDebut, dateFin)
                document.querySelector('input[name="daterange"]').value = dateDebut + ' - ' + dateFin
                $('input[name="daterange"]').trigger("change")
                $(".js-example-basic-multiple").val(idclient).trigger('change');

                $("#zoneAdd").addClass("d-none")
                $("#zoneUpdate").removeClass("d-none")
            })

            $("#updateGarde").click(function() {
                console.log($('input[name="daterange"]').val())
                $.ajax({
                    url: "{{ route('updateClientGarde') }}",
                    method: "post",
                    dataType: "json",
                    data: {
                        _token: '{{ csrf_token() }}',
                        dateInterval: dateConstruct($('input[name="daterange"]').val()),
                        clients: $("#listeClient").val(),
                        garde : idGarde
                    },
                    success: function(response, statut) {
                        // console.log(response)

                        if (response.error != false) {
                            notif("danger", "Attention", "Erreur lors de l'enregistrement")
                            return 0
                        }

                        if (response.edit == false) {
                            notif("danger", "Attention", "Modification non éffectuée !")
                            return 0
                        }

                        notif("success", "Success !!", "Ajout effectué avec success")
                        listeGarde(dateConstruct($('input[name="daterange"]').val()))
                        listeClient()
                        $("#listeClient").val("")
                        $(".select2-selection__rendered").html("")

                        $("#zoneAdd").removeClass("d-none")
                        $("#zoneUpdate").addClass("d-none")
                    },
                    error: function(response, statut) {
                        console.log(response)
                    }
                })

            })

            // Annuler la modification
            $("#anulUpdate").click(function() {
                $("#listeClient").val("")
                $(".select2-selection__rendered").html("")

                $("#zoneAdd").removeClass("d-none")
                $("#zoneUpdate").addClass("d-none")
            })

            // FONCTIONS
            function listeGarde(date) {
                $.ajax({
                    url: "{{ route('listeClientGarde') }}",
                    method: "get",
                    dataType: "json",
                    data: {
                        date: date
                    },
                    beforeSend() {

                    },
                    success: function(response, statut) {
                        // console.log(response)

                        table.clear().draw()
                        $.each(response.data, function(key, value) {
                            table.row.add([
                                `<button class=" btn btn-sm btn-outline-danger btn-icon btn-trash" id="trash-${value.IDGARDECLIENT}">
                                    <i class='bx bxs-trash' style='font-size:14px'></i>
                                </button> &nbsp; &nbsp;
                                <button class=" btn btn-sm btn-outline-warning btn-edit btn-icon" id="edit-${key}" data_id="${value.IDCLIENT}" data_id2="${value.IDGARDECLIENT}">
                                    <i class='bx bxs-edit' style='font-size:14px'></i>
                                </button>`,
                                `<span id="debut-${key}">${explodeDate(value.DateDebutGarde)}</span>`,
                                `<span id="fin-${key}">${explodeDate(value.DateFinGarde)}</span>`,
                                `${value.NomClient}`
                            ])
                        })

                        table.draw();
                    },
                    error: function(response, statut) {
                        console.log(response)
                    }
                })
            }

            function listeClient() {

                $.ajax({
                    url: "{{ route('listeClient') }}",
                    method: "get",
                    dataType: "json",
                    success: function(response, statut) {
                        // console.log(response)

                        if (response.error != false) {
                            $("#listeClient").html("")
                            $("#listeClient").append(`<option value="">Selectionner le client</option>`)

                            $.each(response.data, function(key, value) {

                                var newOption = new Option(value.NomClient, value.IDCLIENT,
                                    true, true);
                                // Append it to the select
                                $('.js-example-basic-multiple').append(newOption).trigger(
                                    'change');
                            })
                            return 0
                        }
                    },
                    error: function(response, statut) {
                        console.log(response)
                    }
                })
            }

            function dateConstruct(date) {
                var dateDiv = date.split(' - ')
                var dateDebut = dateDiv[0].split("/").reverse().join("-")
                var dateFin = dateDiv[1].split("/").reverse().join("-")

                return {
                    dateDebut: dateDebut,
                    dateFin: dateFin
                }
            }

            function notif(type, title, message) {
                types = type

                _("notif-header").classList.add("bg-" + type)
                _("notification").classList.add("bg-" + type + "-transparent")
                $("#notif-title").text(title)
                $("#notif-body").text(message)
                const toast = new bootstrap.Toast(_("notification"))
                toast.show()
            }
        })
    </script>
@endsection
