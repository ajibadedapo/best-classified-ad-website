$(function () {
    var stateOptions;
    $.getJSON('js/nglocation.json', function (result) {
        $.each(result, function (i, state) {
            stateOptions += "<option value='"
            +state.state.id+
                "'>"
            +state.state.name+
            "</option>";

        });
        $('#state').html(stateOptions);
    })
});

$('#state').ready(function () {
        var localOptions;
        $.getJSON('js/nglocation.json', function (result) {
                stateval = $('#state').val();
                var localindex = parseInt(stateval, 10)-1;
               // console.log(result[localindex].state.locals);
                // console.log(state.state.id);
                for (x in result[localindex].state.locals)
                {
                    localOptions += "<option value='"
                        +result[localindex].state.locals[x].name+
                        "'>"
                        +result[localindex].state.locals[x].name+
                        "</option>";

                }

            $('#local').html(localOptions);
        })
});

$('#state').on('change', function () {
        var localOptions;
        $.getJSON('js/nglocation.json', function (result) {
                stateval = $('#state').val();
                var localindex = parseInt(stateval, 10)-1;
               // console.log(result[localindex].state.locals);
                // console.log(state.state.id);
                for (x in result[localindex].state.locals)
                {
                    localOptions += "<option value='"
                        +result[localindex].state.locals[x].name+
                        "'>"
                        +result[localindex].state.locals[x].name+
                        "</option>";

                }

            $('#local').html(localOptions);
        })
});