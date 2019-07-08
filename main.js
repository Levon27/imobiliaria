$(document).ready(function () {

    $("#btn-busca-a").click(function () {
        $('#jb-avan').toggle("slide", {direction: "right"}, 1000);
        console.log("ola");

    });   

    /*Botão de buscar casas*/
    $("#btn-buscar").click(function () {
        $('#jb-res').show();
        $('#jb-det').hide();
        
        // Exemplo de resposta com mais de uma casa - funciona pra uma casa só também
        var response = `[{
"id_imovel":"9",
"id_responsavel":"1",
"n_quartos":"quarto1",
"n_banheiros":"banheiro1",
"valor_imovel":"valor1",
"area":"area1",
"cep":"cep1",
"rua":"rua1",
"bairro":"bairro1",
"cidade":"cidade1",
"tipo":"tipo1",
"alugado":"alugado1"
},
{
"id_imovel":"2",
"id_responsavel":"2",
"n_quartos":"quarto2",
"n_banheiros":"banheiro2",
"valor_imovel":"valor2",
"area":"area2",
"cep":"cep2",
"rua":"rua2",
"bairro":"bairro2",
"cidade":"cidade2",
"tipo":"tipo2",
"alugado":"alugado2"
}]`;
    
    response = $.parseJSON(response);
    console.log(response);
<<<<<<< HEAD
	
	
=======
    $("#table_id").find("tr:gt(0)").remove();
    $(".info").empty();
>>>>>>> def2469693003b2d668f0950e300b9452d260c9c
    //função que adiciona JSON na tabela lá
	
	/*
    $(function() {
        $.each(response, function(i, item) {
            $("<tr id='anuncio "+i+"' class='img-car'><td>"+item.rua+"</td><td><div class='item'><img src='../others/casa1.jpg'><div class='carousel-caption'></div></div></td><td>"+item.valor_imovel+"</td></tr>").appendTo(".dinamico");
            
           $("<div class='card-body' id='"+i+"'><h5 class='card-title'>ID - "+item.id_imovel+"</h5><p class='card-text'>"+item.tipo+"</p><p class='card-text'>"+item.rua+"</p><p class='card-text'>"+item.cidade+"</p><p class='card-text'>"+item.valor_imovel+"</p></div>").appendTo(".info");
            
            $('#'+i).hide();
        });
    });
	
	*/
});

$("#btn-lista").click(function () {
    $('#galeria').hide();
    $('#lista').show();
});

$("#btn-galeria").click(function () {
    $('#lista').hide();
    $('#galeria').show();
});

$(".btn-gostei").click(function () {
    $('#jb-res').hide();
    $('#jb-det').show();
});

$('#table_id').DataTable( {
    language: {
        "sEmptyTable": "Nenhum registro encontrado",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
        "sInfoPostFix": "",
        "sInfoThousands": ".",
        "sLengthMenu": "_MENU_ resultados por página",
        "sLoadingRecords": "Carregando...",
        "sProcessing": "Processando...",
        "sZeroRecords": "Nenhum registro encontrado",
        "sSearch": "Pesquisar",
        "oPaginate": {
            "sNext": "Próximo",
            "sPrevious": "Anterior",
            "sFirst": "Primeiro",
            "sLast": "Último"
        },
        "oAria": {
            "sSortAscending": ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente"
        }
    }
} );

$("#nav-pagina-inicial").click(function () {
    $("#pagina-inicial").show();
    $("#senhorios").hide();
    $("#inquilinos").hide();
})

$("#nav-inquilinos").click(function () {
    $("#pagina-inicial").hide();
    $("#senhorios").hide();
    $("#inquilinos").show();
})

$("#nav-senhorios").click(function () {
    $("#pagina-inicial").hide();
    $("#senhorios").show();
    $("#inquilinos").hide();
})

$("#table_id").on("click", ".img-car", function () {
    $('#jb-res').hide();
    $('#jb-det').show();
    var row = $(this).index();
    console.log(row);
    $('#'+row).show();
})

});