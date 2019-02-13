$('#refreshComms').on
    ('click', function()
        {
            var content = $('#textComm').val();
            var idVideo = $(this).attr('data-id');
            $.post
            (
                './refreshComms',
                {content:content,
                idVideo:idVideo},
                function(data){$('#commentaries').html(data)}
            )
        }
    );