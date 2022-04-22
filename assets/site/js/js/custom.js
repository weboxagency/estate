/**
 * Created by Aghakarim Karimov 
 */
$(document).ready(function () {
    $(document.body).find(".blanked").on("click", function () {
        hideBlanked();
    });

    // $('.counter-num').each(function () {
    //     let $this = $(this);
    //     jQuery({Counter: 0}).animate({Counter: parseInt($this.text())}, {
    //         duration: 1000,
    //         easing: 'swing',
    //         step: function (now) {
    //             $this.text(Math.ceil(now));
    //         }
    //     });
    // });


    $('input').filter(function () {
        return this.type === 'range'
    }).each(function () {
        let $slider = $(this),
            $text_box = $('#' + $(this).attr('link-to'));
        $text_box.val(this.value);

        $slider.change(function () {
            $text_box.val(this.value);
        });

        $text_box.change(function () {
            $slider.val($text_box.val());
        });

    });
});

//(function () {
//    const container = document.getElementById('main-block'),
//        dlgtrigger = document.querySelector('[data-dialog]'),
//        somedialog = document.getElementById(dlgtrigger.getAttribute('data-dialog')),
//        dlg = new DialogFx(somedialog, {
//            onOpenDialog: function (instance) {
//                //scrollTopEvent();
//                disableScroll();
//                classie.add(container, 'container--move');
//            },
//            onCloseDialog: function (instance) {
//                enableScroll();
//                classie.remove(container, 'container--move');
//            }
//        });
//    dlgtrigger.addEventListener('click', dlg.toggle.bind(dlg));
//    if ($("#news-block .dialog-inner").length) {
//        $("#news-block .dialog-inner").slimScroll({
//            height: '100%',
//            width: 'calc(100% - 15px)',
//            distance: '0'
//        })
//    }
//})();


/*** INFOGRAPHICS MENU BEGIN ***/
$('.toggletitle').click(function () {
    $(this).parent().toggleClass('active');
});

$('.infographics .menu li').click(function () {
    $('.infographics .menu li').removeClass('active');
    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
    } else {
        $(this).addClass('active');
    }
});
/*** INFOGRAPHICS MENU END ***/

/*** GOOGLE CHARTS BEGIN ***/
//google.charts.load('current', {'packages':['corechart']});
//google.charts.setOnLoadCallback(drawChart);
//
//function drawChart() {
//    var data = google.visualization.arrayToDataTable([
//        ["Element", "Density", { role: "style" } ],
//        ["Copper", 8.94, "#b87333"],
//        ["Silver", 10.49, "silver"],
//        ["Gold", 19.30, "gold"],
//        ["Platinum", 21.45, "color: #e5e4e2"]
//    ]);
//
//    var view = new google.visualization.DataView(data);
//    view.setColumns([0, 1,
//        { calc: "stringify",
//            sourceColumn: 1,
//            type: "string",
//            role: "annotation" },
//        2]);
//
//    var options = {
//        title: "Density of Precious Metals, in g/cm^3",
//        bar: {groupWidth: "95%"},
//        legend: { position: "none" },
//    };
//    var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
//    chart.draw(view, options);
//}
//
//$(window).resize(function(){
//    google.charts.setOnLoadCallback(drawChart);
//});
/*** GOOGLE CHARTS END ***/

/*** IMAGE GALLERY BEGIN ***/
var slider = $("#imgslider");

$(document).ready(function () {
    var currentIndex = 0;
    var count = slider.find("ul li").length;
    var currentImg = slider.find("ul li:first-child img").attr("src");
    slider.prepend("<div class='controls'>" +
        "<div class='prev'><span></span></div>" +
        "<div><img class='mainimg' src='" + currentImg + "'></div>" +
        "<div class='next'><span></span></div>" +
        "</div>");

    slider.find('.controls .prev').click(function () {
        currentIndex = Math.abs(currentIndex - 1 + count) % 5;
        slider.find(".mainimg").attr("src", slider
            .find('ul li:nth-child(' + (currentIndex + 1) + ') img').attr("src"));
    });

    slider.find('.controls .next').click(function () {
        currentIndex = Math.abs(currentIndex + 1 + count) % 5;
        slider.find(".mainimg").attr("src", slider
            .find('ul li:nth-child(' + (currentIndex + 1) + ') img').attr("src"));
    });

    slider.find("ul li").click(function () {
        slider.find(".mainimg").attr("src", $(this).find('img').attr("src"));
        currentIndex = $(this).index();
    });
});
/*** IMAGE GALLERY BEGIN ***/

/*** MENU TOGGLE DROPDOWN BEGIN ***/
$(".indexmenu li").click(function () {
    $(".indexmenu li").not($(this)).removeClass('active');
    $(this).toggleClass('active');
});
/*** MENU TOGGLE DROPDOWN END ***/


$(document).ready(function () {
    //$('.datepicker').datepicker();
    //
    //
    //$('[data-fancybox="gallery"]').fancybox({
    //    // Options will go here
    //});


    $(".input").inputmask();
});


function printDiv(divName) {
    // var content = document.getElementById(divName).cloneNode(true);
    var content = $('#printableArea').html();

    var mywindow = window.open('', 'Print', 'height=600,width=800');

    let link = '{{asset("site/assets/css/custom.css")}}';

    var myStyle = '<link rel="stylesheet" href="' + link + '" />';

    mywindow.document.write('<html><head><title>Print</title>');
    mywindow.document.write('</head><body >');
    mywindow.document.write(myStyle + content);
    mywindow.document.write('</body></html>');

    mywindow.document.close();
    mywindow.focus();
    mywindow.print();
    mywindow.close();
}


$(function () {
    $('.onlyletter').keydown(function (e) {
        if (e.altKey) {
            e.preventDefault();
        } else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 9) || (key == 16) || (key == 32) || (key == 46) || (key == 87) || (key == 219) || (key == 221) || (key == 186) || (key == 192) || (key == 188) || (key == 190) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90) || (key >= 112 && key <= 123))) {
                e.preventDefault();
            }
        }
    });
});

$("#opt1").click(function () {
    if (this.checked) {
        $("#opt1label").text("ADİ");
    } else {
        $("#opt1label").text("GÜZƏŞTLİ");
    }
});

$("#opt2").click(function () {
    if (this.checked) {
        $("#opt2label").text("ADİ");
    } else {
        $("#opt2label").text("GÜZƏŞTLİ");
    }
});

$(function () {
    $('#menu').metisMenu();
    $(".custom-filter:not('#credit_percentage')").number(true, 0);
});