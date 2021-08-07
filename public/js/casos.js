/**
 * @description Casos refiere a los militares con situaciones especiales
 * @author maikol_echenique@hotmail.com
 * @date  
 * @version 1.0.0 ES11
 **/


let lstCasos = {};
let militarObj = {};
let familiarObj = {};




 class Casos{
    

    constructor(){
        
    }
    
    
    obtener(){
        
    }

    listar(){
        $.ajax({
            url: _API + '/consultar/listarCasos',
            dataType: 'json',
            method: 'GET',
            success: function(datos){
                lstCasos = datos;
                //console.log(datos)
                CASVer();
            }
        });
    };

    // listarFamiliares(){
    //     $.ajax({
    //         url: _API + '/familiares/listarFamiliares',
    //         dataType: 'json',
    //         method: 'GET',
    //         success: function(datos){
    //             lstFamiliares = datos;
                
    //         }
    //     });
    // };


}

let cas = new Casos();



 $(function(){
    cas.listar();
    // cas.listarFamiliares();
})

function CASVer(){
    var datos = lstCasos;
        datos.forEach(e => {
            $('#tbCasos').append(`<TR><TD>${e.id}</TD><TD>${e.grado}</TD>
            <TD>${e.nombre}</TD><TD>${e.cedula}</TD>
            <TD>${e.componente}</TD><TD>${e.situacion}</TD>
            <TD class=""><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="text-muted sr-only">Action</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right" style="">
                <a class="dropdown-item" onclick="editar_mil(${e.cedula})">Editar</a>
                <a class="dropdown-item" href="#">Eliminar</a>
            </div>
            </TD></TR>`);
        });
}


function editar_mil(id){
    lstCasos.forEach(e => {
        //console.log(e.cedula, " ID ", id);
        if ( e.cedula == id){
            militarObj = e;
        }
    });
        // familiarObj = lstFamiliares;
        

    var datos = JSON.stringify(militarObj);
    // var datosf = JSON.stringify(familiarObj);

    sessionStorage.setItem('militarlocal', datos);
    // sessionStorage.setItem('familiarlocal', datosf);

   location.href =_API + '/registrar/editarficha';
    
 
}



    

    