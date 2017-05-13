/**
 * Created by Wilco on 10/05/17.
 */
$(document).ready(function(){

    $('.modal').modal();

    $("#scanRegister").click(function(){
        setTimeout(function () {
            $('.progress').hide();
        }, 5000);

        setTimeout(function () {
            $('.scanP').hide();
        }, 5000);

        setTimeout(function () {
            $('.hiddenElement').show();
        }, 5000);

        setTimeout(function () {
            $('.prefilledForm').show();
        }, 5000);

        setTimeout(function () {
            $('.emptyForm').hide();
        }, 5000);

        setTimeout(function () {
            $('.hideText').hide();
        }, 5000);

    });


});

