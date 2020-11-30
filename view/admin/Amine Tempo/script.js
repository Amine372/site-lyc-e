var editor; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        ajax: "../php/staff-view.php",
        table: "#example",
        fields: [ {
                label: "First name:",
                name: "first_name"
            }, {
                label: "Last name:",
                name: "last_name"
            }, {
                label: "Phone #:",
                name: "phone"
            }, {
                label: "City:",
                name: "city"
            }
        ]
    } );

    $('#example').DataTable( {
        dom: "Bfrtip",
        ajax: {
            url: "../php/staff-view.php",
            type: 'POST'
        },
        columns: [
            { data: "first_name" },
            { data: "last_name" },
            { data: "phone" },
            { data: "city" }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } );
} );
