$(document).ready(function(){
    $('#example1').DataTable({
        'ajax':{
            'url' : '../../Controller/ShowAllCatetoryController.php'
        },
        'columns' : [
            {'data':'CateID'},
            {'data':'CateName'},
            {'data':'CateAddress'},
            {'data':'CateContent'},
            {'data':'CateRent'},
            {'data':'CateStatus'},
            {'data':'GroupCateID'}
        ]
    });
    $('#example1 tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        alert( 'You clicked on '+data.GroupCateName+'\'s row' );
        $("#EditGroupCateName").val(data.GroupCateName);
        $("#EditGroupCateID").val(data.GroupCateID);
        $("#DeleteGroupCateName").val(data.GroupCateName);
    });
});