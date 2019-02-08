$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
    $(document).ready(function(){
        $('#btn_cript').click(function(){
            cifrar($(this));
        })
        $('#btn_descript').click(function(){
            decifrar($(this));
        })
        function cifrar(obj)
        {
            $('#texto').empty();
            var string = $('#texto').val();
            $.ajax({
                type: "POST",
                url: "../view/cifrar.php",
                data: {'string': string},
                dataType: "json",
                success : function(data){
                    $('#cifra').html(data);
                    console.log('success', url);
                }
            });
        }
        function decifrar(obj)
        {
            $('#texto').empty();
            var string = $('#texto').val();
            $.ajax({
                type: "POST",
                url: "../view/decifrar.php",
                data: {'string': string},
                dataType: "json",
                success : function(data){
                    $('#cifra').html(data);
                    console.log('success', url);
                }
            });
        }
    })
