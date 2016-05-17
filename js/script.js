$(document).ready(function () {
//
//                                         DATATABLE
//
// plug_in jQuery datatable zero configuration :
    var dtabledavid = $('#tinfo').dataTable({
        "dom": '<"toolbar">frtip',
        "searching": false,
        "paging": false,
        "responsive": true,
        "bProcessing": true,
        "jQueryUI": true,
        "processing": true,
        "serverSide": true,
        ajax: {url: "requestInfo.php",
            type: "POST",
            dataType: "JSON"
                    /*"fnDrawCallback": function () {
                     $(".classDrag").draggable({
                     revert: true
                     });*/
        }
    });
    $("#plussign").click(function () {
        $("#titre").val('');
        $("#info").val('');
    });
});
//
//                                        SHOW / HIDE
//
// to activate the form :


// to disable the form :
$("#minussign").click(function () {
    $("#form").addClass('hidden');
    $("#minussign").addClass('hidden');
    $("#plussign").removeClass('hidden');
    $('#catSelect').val('');
});
// to leave ajouter.php and return to index.php :
$("#quitter").click(function () {
    header('Location: index.php');
    exit();
});
//
//                                         AJAX JQUERY
//
// Ajax jquery to insert a new row in tabinfos : formbtn
$("#formbtn").click(function () {
//alert('data: nomcat=' + $("#catSelect option:selected").val() + '&titleinfo=' + document.getElementById('titre').value + '&info=' + document.getElementById('info').value);

    var nomcatv = $("#catSelect option:selected").val();
    var titleinfov = document.getElementById('titre').value;
    var infov = document.getElementById('info').value;
    $.ajax({
        type: 'POST',
        //data: 'nomcat=' + nomcat + '&titleinfo=' + titleinfo + '&info=' + info,
        //dataType: 'html',
        data: {nomcat: nomcatv, titleinfo: titleinfov, info: infov},
        dataType: 'json',
        url: 'requestNewInfo.php',
        timeout: 3000,
        success: function (data) {
            alert('Insert tabinfos ok');
            $("#form").addClass('hidden');
            $("#minussign").addClass('hidden');
            $("#plussign").removeClass('hidden');
            $('#catSelect').val('');
        },
        error: function (resultat, statut, erreur) {
            alert('!!! Problème !!! La requête n\'a pas abouti; erreur : ' + erreur);
        }
    });
});
$('#trashCan').droppable({
    accept: ".classDrag",
    tolerance: "pointer",
    drop: function (event, ui) {
        var draggableId = ui.draggable.attr("id");
        var droppableId = $(this).attr("id");
        ui.draggable.draggable('option', 'revert', false);
        $.ajax({
            type: 'POST',
            data: 'idinfo=' + draggableId,
            dataType: 'html',
            url: 'requestDeleteInfo.php',
            timeout: 3000,
            success: function (code_html, statut) {
                alert('Delete tabinfos ok' + draggableId);
            },
            error: function (resultat, statut, erreur) {
                alert('!!! Problème !!! La requête n\'a pas abouti; erreur : ' + erreur);
            }
        });
    }
});
