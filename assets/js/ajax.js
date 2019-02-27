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

    $('#applyFilters').on
        ('click',function()
            {
                var theme = $( "#searchFilters" )[0].elements["toggle-1"].value;
                var price =$( "#searchFilters" )[0].elements["toggle-2"].value;
                var keywords = $('#searchFilters')[0].elements["inputSearch"].value;
                $.post
                (
                    './applyFilters',
                    {theme:theme,
                    price:price,
                    keywords:keywords},
                    function(data){$('#contentSearch').html(data)}
                )
            }

        );
      function verifyRadiosThemes()
        {
            var element = document.forms.searchFilters.radios-themes;
            for (var i=0; i < element.length; i++)
            {
                if (element[i].checked)
                {
                var radioChecked = element[i].value;
                break;
                }
            }
            return radioChecked;
        }

        function verifyRadiosPrices()
        {
            var element = document.forms.searchFilters.radios-prices;
            for (var i=0; i < element.length; i++)
            {
                if (element[i].checked)
                {
                var radioChecked = element[i].value;
                break;
                }
            }
            return radioChecked;
        }