console.log('hello')
var check = false;

function changeVal(el) {
  var qt = parseFloat(el.parent().children(".qt").html());
  var price = parseFloat(el.parent().children(".price").html());
  var eq = Math.round(price * qt * 100) / 100;

  el.parent().children(".full-price").html( eq + "€" );

  changeTotal();
}

function changeTotal() {

  var price = 0;

  $(".full-price").each(function(index){
    price += parseFloat($(".full-price").eq(index).html());
  });

  price = Math.round(price * 100) / 100;
  var tax = Math.round(price * 0.05 * 100) / 100
  var shipping = parseFloat($(".shipping span").html());
  var fullPrice = Math.round((price + tax + shipping) *100) / 100;

  if(price == 0) {
    fullPrice = 0;
  }

  $(".subtotal span").html(price);
  $(".tax span").html(tax);
  $(".total span").html(fullPrice);
}

$(document).ready(function(){

  $(".remove").click(function(){
    var el = $(this);
    el.parent().parent().addClass("removed");
    window.setTimeout(
      function(){
        el.parent().parent().slideUp('fast', function() {
          el.parent().parent().remove();
          if($(".product").length == 0) {
            if(check) {
              $("#cart").html("<h1>The shop does not function, yet!</h1><p>If you liked my shopping cart, please take a second and heart this Pen on <a href='https://codepen.io/ziga-miklic/pen/xhpob'>CodePen</a>. Thank you!</p>");
            } else {
              $("#cart").html("<h1>No products!</h1>");
            }
          }
          changeTotal();
        });
      }, 200);
  });

  $(".qt-plus").click(function(){
    $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);

    $(this).parent().children(".full-price").addClass("added");

    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
  });

  $(".qt-minus").click(function(){

    child = $(this).parent().children(".qt");

    if(parseInt(child.html()) > 1) {
      child.html(parseInt(child.html()) - 1);
    }

    $(this).parent().children(".full-price").addClass("minused");

    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
  });

  window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);

  $(".btn2").click(function(){
    check = true;
    $(".remove").click();
  });
});

var CHART = document.getElementById("linechart");
var myLineChart = new Chart(CHART, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'My First dataset',
            fill: false,
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45]
        },
        {
            label: 'My SECOND dataset',
            backgroundColor: 'rgb(33, 99, 132)',
            borderColor: 'rgb(33, 99, 132)',
            data: [20, 5, 10, 30, 50, 20, 5]
        }]
    },

});

$(document).ready(function() {
      var cat = [];
      var nombre = [];
      var num = productos.length;
      for (var i=0;i<num;i++)
      {
        nombre.push(productos[i].nombre);
        cat.push(productos[i].categoria_id);
      }
      console.log(productos);
      var CHART = document.getElementById("linechart2");
      var myLineChart = new Chart(CHART, {
        type: 'line',
        data: {
          labels: nombre,
          datasets: [{
              label: 'My First dataset',
              fill: false,
              backgroundColor: 'rgb(255, 99, 132)',
              borderColor: 'rgb(255, 99, 132)',
              data: cat
            },
            {
              label: 'My SECOND dataset',
              backgroundColor: 'rgb(33, 99, 132)',
              borderColor: 'rgb(33, 99, 132)',
              data: [20, 5, 10, 30, 50, 20, 5]
            }]
          },
        });
});


// function (productos)
//   {
//     var cat = [];
//     var marks = [];
//     for (var i in productos)
//     {
//       name.push(productos[i].student_name);
//       marks.push(productos[i].marks);
//     }
// }

// $(document).ready(function() {
//     $.ajax({
//         url: "http://localhost:8000/administrarProducto.blade.php",
//         dataType: 'json',
//         contentType: "application/json; charset=utf-8",
//         method: "GET",
//         success: function(productos) {
//             var nombre = [];
//             var stock = [];
//             var color = ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'];
//             var bordercolor = ['rgba(255,99,132,1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'];
//             console.log(data);
//
//             for (var i in data) {
//                 nombre.push(productos[i].nombre);
//                 stock.push(productos[i].categoria_id);
//             }
//
//             var chartdata = {
//                 labels: nombre,
//                 datasets: [{
//                     label: nombre,
//                     backgroundColor: color,
//                     borderColor: color,
//                     borderWidth: 2,
//                     hoverBackgroundColor: color,
//                     hoverBorderColor: bordercolor,
//                     data: stock
//                 }]
//             };
//
//             var mostrar = $("#miGrafico");
//
//             var grafico = new Chart(mostrar, {
//                 type: 'doughnut',
//                 data: chartdata,
//                 options: {
//                     responsive: true,
//                     scales: {
//                         yAxes: [{
//                             ticks: {
//                                 beginAtZero: true
//                             }
//                         }]
//                     }
//                 }
//             });
//         },
//         error: function(data) {
//             console.log(data);
//         }
//     });
// });
