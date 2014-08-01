function getVacantes() {
    $.ajax({
        url: "http://localhost:8888/SFL-Admin/index.php/api/vacantes/todasVacantes",
        //data: {},
        type: "POST",
        dataType: "json",
        success: function(source) {
            if (source.success === true) {
                pintaVacante(source.vacantes); //funcion que pinta lementos, se manda un parametro que es el arreglo de todas las vacantes
            } else {
                console.log(source.message);
            }
        },
        error: function(dato) {
            console.log(JSON.stringify(dato));
            console.log("ERROR");
        }
    });
}




// id_vacante, vacante, empresa, descripcion, descripcion, salario, horario, fecha, escolaridad, experiencia
// 
// 
// vacante.id_vacante +
// '<p>' +




function pintaVacante(data) {
    console.log(data);

    $.each(data, function(index, vacante) {

        $("#api").append('<div class="box-inicio">' +


            '<h4>Vacante</h4>' +
            vacante.vacante +
            ' </div>');
    });
}




$(document).ready(function() {
    getVacantes();
});