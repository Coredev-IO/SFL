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

        $("#api").append('<div class="box-inicio2">' +


            '<h3>Vacante</h3>' +
            vacante.vacante +



            '<h3>Empresa</h3>' +
            vacante.empresa +



            '<h3>Descripcion</h3>' +
            vacante.descripcion +
            '<br>' +




            '<div class="row">' +
            '<div class="col-md-1 col-md-offset-10">' +
            '<button type="button class="btn btn-primary botonVacante">Aplicar</button>' +

            ' </div>');
    });
}




$(document).ready(function() {
    getVacantes();
});