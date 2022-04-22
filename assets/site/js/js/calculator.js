$(document).ready(function () {

    $.each($('.range'), function (key, value) {

        $(this).on("input", function () {
            var val = $(this).find('input').val();
            $(this).parent().find('.range-header input').val(val);
        }).trigger("change");

    });

    // $("a[data-tab='tab2']").click();

    // var config = {
    //     c1: {
    //         km: 300, // Kreditin müddəti
    //         gkm: 360, // Güzəştli kreditin müddəti
    //         kf: 8, //Kredit faizi (illik)
    //         gkf: 4, // Güzəştli kredit faizi (illik)
    //         ausx: 173, // Ailə üzvlərinin saxlanma xərci
    //         amge: 0.7, // Aylıq məcmu gəlir əmsalı
    //         eosx: 0.008, // Ehtimal olunan sığorta xərci
    //         kmm: 150000, // Kreditin maksimal məbləği
    //         gkmm: 100000, // Güzəştli kreditin maksimal məbləği
    //         miof: 0.15, // Minimal ilkin ödəniş faizi
    //         gmiof: 0.10 // Güzəştli minimal ilkin ödəniş faizi
    //     }, c2: {
    //         bokb: 0.004, // Bankın ödəyəcəyi komissiyalar - Birdəfəlik
    //         mkm: 5000000, // Maksimal kredit məbləği
    //         gmkm: 10000000, // Güzəştli maksimal kredit məbləği
    //         mkm1: 12, // Maksimal kredit müddəti birinci şərt
    //         mkm2: 24, // Maksimal kredit müddəti ikinci şərt
    //         mkm3: 84, // Maksimal kredit müddəti üçüncü şərt
    //         mgm1: 11, // Maksimal güzəşt müddəti birinci şərt
    //         mgm2: 23, // Maksimal güzəşt müddəti ikinci şərt
    //         mgm3: 24, // Maksimal güzəşt müddəti üçüncü şərt
    //         msm: 36 // Maksimal subsidiya müddəti birinci şərt
    //     }
    // };


    // BIRINCI KALKULTAYOR >
    $("#opt").click(function () {
        $("#optlabel1").toggleClass("active");
        $("#optlabel2").toggleClass("active");
    });

    var i2 = config.c1.ausx;
    var i3 = config.c1.amge;
    var i4 = config.c1.eosx;
    var i5 = config.c1.kmm;


    function PV(rate, nper, pmt) {
        return pmt / rate * (1 - Math.pow(1 + rate, -nper));
    }

    function EDATE(date, diff) {
        var date1 = new Date(date);
        date1.setMonth(date1.getMonth() + diff);
        var date2 = new Date("1/1/1900");
        var timeDiff = Math.abs(date2.getTime() - date1.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24) + 2);
        return diffDays;
    }

    function TODAY() {
        var now = new Date();
        var dd = now.getDate();
        var mm = now.getMonth() + 1;
        var yyyy = now.getFullYear();
        var date1 = new Date(mm + "/" + dd + "/" + yyyy);
        var date2 = new Date("1/1/1900");
        var timeDiff = Math.abs(date2.getTime() - date1.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24) + 2);
        return diffDays;
    }

    function PMT(rate, nper, pv, fv, type) {
        if (!fv) fv = 0;
        if (!type) type = 0;
        if (rate == 0) return -(pv + fv) / nper;
        var pvif = Math.pow(1 + rate, nper);
        var pmt = rate / (pvif - 1) * -(pv * pvif + fv);
        if (type == 1) {
            pmt /= (1 + rate);
        }
        return pmt;
    }

    function ROUNDUP(number, digits) {
        var factor = Math.pow(10, digits);
        return Math.ceil(number * factor) / factor
    }

    function today(i) {
        var today = new Date();
        today.setMonth(today.getMonth() + i);
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();

        var months = ["yanvar", "fevral", "mart", "aprel", "may", "iyun",
            "iyul", "avqust", "sentyabr", "oktyabr", "noyabr", "dekabr"];

        if (dd < 10) {
            dd = '0' + dd
        }
        //
        //if(mm<10) {
        //    mm = '0'+mm
        //}

        today = dd + ' ' + months[mm - 1] + ' ' + yyyy;
        return today;
    }

    function hesabla() {
        if ($("#opt").is(':checked')) {
            $("#credit_time_range").attr("max", config.c1.gkm);
            $("#credit_percentage_range").attr("max", config.c1.gkf);
            if ($("#credit_percentage").val() > config.c1.gkf) $("#credit_percentage").val(config.c1.gkf);

            i5 = config.c1.gkmm;

            $("#first_payment_range").attr("max", config.c1.gkmm);
            $("#first_payment_percentage_range").attr("min", config.c1.gmiof * 100);
        } else {
            $("#credit_time_range").attr("max", config.c1.km);
            $("#credit_percentage_range").attr("max", config.c1.kf);
            if ($("#credit_time").val() > config.c1.km) $("#credit_time").val(config.c1.km);

            i5 = config.c1.kmm;

            $("#first_payment_percentage_range").attr("min", config.c1.miof * 100);
            if ($("#first_payment_percentage").val() < config.c1.miof * 100) $("#first_payment_percentage").val(config.c1.miof * 100);
        }

        var c3 = $("#monthly_income").val(); // Aylıq xalis gəlir
        var c4 = $("#family").val(); // Ailə üzvlərinin sayı
        var c5 = $("#other").val(); // Digər öhdəliklər
        var c6 = $("#credit_percentage").val(); // Kredit faizi (illik)
        var c7 = $("#credit_time").val(); // Kreditin müddəti (daxil edilən)
        var c8 = $("#birthday .month").val() + "/" + $("#birthday .day").val() + "/" + $("#birthday .year").val();
        var i6 = $("#first_payment_percentage").val(); // Minimal ilkin ödəniş faizi


        //=IF(
        //    C7>ROUND((EDATE(C8,779)-TODAY())/30.4,0),
        //    ROUND((EDATE(C8,779)-TODAY())/30.4,0),
        //    C7
        //)
        var c14;
        if (c7 > Number(((EDATE(c8, 779) - TODAY()) / 30.4).toFixed(0))) {
            c14 = Number(((EDATE(c8, 779) - TODAY()) / 30.4).toFixed(0));
        } else {
            c14 = c7;
        }


        //=IF(
        //    C3*I3>C3-C4*I2-C5,
        //    C3-C4*I2-C5,
        //    C3*I3
        //)
        var i9;
        if (c3 * i3 > c3 - c4 * i2 - c5) {
            i9 = c3 - c4 * i2 - c5;
        } else {
            i9 = c3 * i3;
        }


        //=I9 / ((C6 / 12) / (1 - 1 / POWER(1 + C6/ 12,C14)))
        var i10 = i9 / ((c6 / 1200) / (1 - 1 / Math.pow(1 + c6 / 1200, c14)));


        //=IF(
        //    C3*I3>C3-C4*I2-C5-(I10*I4/12),
        //    C3-C4*I2-C5-(I10*I4/12),
        //    C3*I3
        //)
        var g9;
        if (c3 * i3 > c3 - c4 * i2 - c5 - (i10 * i4 / 12)) {
            g9 = c3 - c4 * i2 - c5 - (i10 * i4 / 12);
        } else {
            g9 = c3 * i3;
        }


        //=G9 / ((C6 / 12) / (1 - 1 / POWER(1 + C6/ 12,C14)))
        var i11 = g9 / ((c6 / 1200) / (1 - 1 / Math.pow(1 + c6 / 1200, c14)));


        //=ROUND(
        //    IF(
        //        I12>I5,
        //        I5,
        //        I12
        //    ),
        //2)
        var c13;
        if (i11 > i5) {
            c13 = Number(i5.toFixed(2));
        } else {
            c13 = Number(i11.toFixed(2));
        }


        //=ROUND(-PMT(C6/12,C14,C13),2)
        var i8 = Number((-PMT(c6 / 1200, c14, c13)).toFixed(2));


        //=IF(
        //    I9<I8,
        //    I9,
        //    I8
        //)
        var c15;
        if (i9 < i8) {
            c15 = i9;
        } else {
            c15 = i8;
        }


        //=ROUND((C13*I4)/12,2)
        var c16 = Number((c13 * i4 / 12).toFixed(2));


        //=C13*100/(100-I6*100)
        var c18 = c13 * 100 / (100 - i6);


        //=C18-C13
        var c17 = c18 - c13;


        if (c13 > 0) $("#result_credit").text(c13).number(true, 2); else $("#result_credit").text(0);
        if (c14 > 0) $("#result_credit_time").text(c14).number(true, 0); else $("#result_credit_time").text(0);
        if (c15 > 0) $("#result_monthly_credit").text(c15).number(true, 2); else $("#result_monthly_credit").text(0);
        if (c16 > 0) $("#result_insurance").text(c16).number(true, 2); else $("#result_insurance").text(0);
        if (c17 > 0) $("#require_initial_payment").text(c17).number(true, 2); else $("#require_initial_payment").text(0);
        if (c18 > 0) $("#home_cost").text(c18).number(true, 2); else $("#home_cost").text(0);
    }

    $("#birthday select").change(function () {
        hesabla();
    });

    $("#calculator input").on('change', function () {
        hesabla();
    });


    $("#opt").click(function () {
        if ($("#opt").is(":checked")) {
            setTimeout(function () {
                $("#credit_time").val(config.c1.gkm);
                $("#credit_time_range").val(config.c1.gkm);

                $("#credit_percentage").val(config.c1.gkf);
                $("#credit_percentage_range").val(config.c1.gkf);

                $("#first_payment_percentage").val(config.c1.gmiof*100);
                $("#first_payment_percentage_range").val(config.c1.gmiof*100);
            }, 0);
        } else {
            setTimeout(function () {
                $("#credit_time").val(config.c1.km);
                $("#credit_time_range").val(config.c1.km);

                $("#credit_percentage").val(config.c1.kf);
                $("#credit_percentage_range").val(config.c1.kf);

                $("#first_payment_percentage").val(config.c1.miof*100);
                $("#first_payment_percentage_range").val(config.c1.miof*100);
            }, 0);
        }
    });


    // BIRINCI KALKULTAYOR />


    // IKINCI KALKULTAYOR >
    var d19; // Təminatın kreditə nisbəti
    var d20; // Zəmanətin kreditə nisbəti (max)
    var d21; // Zəmanət məbləği (max)
    var d22; // Zəmanət məbləği (min)
    var D23; // Subsidiya faizi
    var c22; // Subsidiya məbləği

    var d27; // Birdəfəlik
    var d28; // İllik
    var d29; // Xidmət haqqı

    var e14 = 0; // Təminatın likvid dəyəri - köməkçi dəyişən
    var d16 = 0; // Kreditin təminatlılıq dərəcəsi - köməkçi dəyişən

    function hesabla2() {
        // KREDITIN MƏBLƏĞİ MAKSİMUM DƏYƏR
        if ($("#c2_applicant").val() == 0) {
            $("#c2_credit_sum_range").attr("max", config.c2.mkm);
            if ($("#c2_credit_sum").val() > config.c2.mkm) $("#c2_credit_sum").val(config.c2.mkm);
        } else {
            $("#c2_credit_sum_range").attr("max", config.c2.gmkm);
        }


        // KREDITIN MÜDDƏTİ MAKSİMUM DƏYƏR
        if ($("#c2_credit_type").val() == 0) {
            if ($("#c2_credit_destination").val() == 0) {
                $("#c2_credit_time_range").attr("max", config.c2.mkm2);
                if ($("#c2_credit_time").val() > config.c2.mkm2) $("#c2_credit_time").val(config.c2.mkm2);
            } else {
                $("#c2_credit_time_range").attr("max", config.c2.mkm3);
            }
        } else {
            $("#c2_credit_time_range").attr("max", config.c2.mkm1);
            if ($("#c2_credit_time").val() > config.c2.mkm1) $("#c2_credit_time").val(config.c2.mkm1);
        }


        // GÜZƏŞT MÜDDƏTİ MAKSİMUM DƏYƏR
        if ($("#c2_credit_type").val() == 0) {

            if ($("#c2_credit_destination").val() == 0) {
                $("#c2_discount_time_range").attr("max", config.c2.mgm2);
                if ($("#c2_discount_time").val() > config.c2.mgm2) $("#c2_discount_time").val(config.c2.mgm2);
            } else {
                $("#c2_discount_time_range").attr("max", config.c2.mgm3);
            }

        } else {
            $("#c2_discount_time_range").attr("max", config.c2.mgm1);
            $("#c2_discount_time").val(config.c2.mgm1);
        }


        // SUBSİDİYA MÜDDƏTİ MAKSİMUM DƏYƏR
        if ($("#c2_credit_time").val() < config.c2.msm) {
            $("#c2_subsidy_time_range").attr("max", $("#c2_credit_time").val());
            if ($("#c2_subsidy_time").val() > $("#c2_credit_time").val()) $("#c2_subsidy_time").val($("#c2_credit_time").val());
        } else {
            $("#c2_subsidy_time_range").attr("max", config.c2.msm);
        }


        // TƏMİNATIN LİKVİD DƏYƏRİ - KÖMƏKÇİ DƏYİŞƏN
        //=IF(
        //    OR(D13="Daşınmaz və ya daşınar əmlak",D13="Dövlət qısamüddətli istiqrazlar "),
        //    D14*100%,
        //    IF(
        //        D13="Mexaniki nəqliyyat vasitələri ",
        //        D14*40%,
        //        D14*30%
        //    )
        //)
        if (($("#c2_assurance_type").val() == 0) || ($("#c2_assurance_type").val() == 3)) {
            e14 = $("#c2_liquid_value").val();
        } else {
            if ($("#c2_assurance_type").val() == 1) {
                e14 = ($("#c2_liquid_value").val() * 0.4);
            } else {
                e14 = ($("#c2_liquid_value").val() * 0.3);
            }
        }


        // KREDİTİN TƏMİNATLILIQ DƏRƏCƏSİ - KÖMƏKÇİ DƏYİŞƏN
        //=IF(
        //    E14/D6>1.2,
        //    "Yuxarı",
        //    IF(
        //        AND(E14/D6>=0.8,E14/D6<=1),
        //        "Aşağı",
        //        IF(
        //            AND(E14/D6>1,E14/D6<=1.2),
        //            "Orta",
        //            "Təminat kifayət etmir"
        //        )
        //    )
        //)
        if ((e14 / $("#c2_credit_sum").val()) > 1.2) {
            d16 = 2;
        } else {
            if (((e14 / $("#c2_credit_sum").val()) >= 0.8) && ((e14 / $("#c2_credit_sum").val()) <= 1)) {
                d16 = 0;
            } else {
                if (((e14 / $("#c2_credit_sum").val()) > 1) && ((e14 / $("#c2_credit_sum").val()) <= 1.2)) {
                    d16 = 1;
                } else {
                    d16 = 3;
                }
            }
        }


        // TƏMİNATIN LİKVİD DƏYƏRİ MİNİMUM DƏYƏR
        $("#c2_liquid_value_range").attr("min", $("#c2_credit_sum").val() * 0.8);
        if ($("#c2_liquid_value").val() < $("#c2_credit_sum").val() * 0.8) $("#c2_liquid_value").val($("#c2_credit_sum").val() * 0.8);


        // ÇIXIŞ QİYMƏTLƏRİNİN HESABLANMASI



        // Təminatın kreditə nisbəti (likvid)
        //=(
        //    IF(
        //        OR(D13="Daşınmaz və ya daşınar əmlak",D13="Dövlət qısamüddətli istiqrazlar "),
        //        D14*100%,
        //        IF(
        //            D13="Mexaniki nəqliyyat vasitələri ",
        //            D14*40%,
        //            D14*30%
        //        )
        //    )
        //)/D6
        if (($("#c2_assurance_type").val() == 0) || ($("#c2_assurance_type").val() == 3)) {
            d19 = ($("#c2_liquid_value").val() / $("#c2_credit_sum").val() * 100);
        } else {
            if ($("#c2_assurance_type").val() == 1) {
                d19 = ($("#c2_liquid_value").val() * 0.4 / $("#c2_credit_sum").val() * 100);
            } else {
                d19 = ($("#c2_liquid_value").val() * 0.3 / $("#c2_credit_sum").val() * 100);
            }
        }


        // Zəmanətin kreditə nisbəti (max)
        //=IF(
        //    AND(D15="Aşağı riskli",D16="Yuxarı"),
        //    0.6,
        //    IF(
        //        AND(D15="Aşağı riskli",D16="Orta"),
        //        0.65,
        //        IF(
        //            AND(D15="Aşağı riskli",D16="Aşağı"),
        //            0.7,
        //            IF(
        //                AND(D15="Orta riskli",D16="Yuxarı"),
        //                0.65,
        //                IF(
        //                    AND(D15="Orta riskli",D16="Orta"),
        //                    0.7,
        //                    IF(
        //                        AND(D15="Orta riskli",D16="Aşağı"),
        //                        0.75,
        //                        "İmtina"
        //                    )
        //                )
        //            )
        //        )
        //    )
        //)
        if (($("#c2_risk_degree").val() == 0) && (d16 == 2)) {
            d20 = 0.6;
        } else {
            if (($("#c2_risk_degree").val() == 0) && (d16 == 1)) {
                d20 = 0.65;
            } else {
                if (($("#c2_risk_degree").val() == 0) && (d16 == 0)) {
                    d20 = 0.7;
                } else {
                    if (($("#c2_risk_degree").val() == 1) && (d16 == 2)) {
                        d20 = 0.65;
                    } else {
                        if (($("#c2_risk_degree").val() == 1) && (d16 == 1)) {
                            d20 = 0.7;
                        } else {
                            if (($("#c2_risk_degree").val() == 1) && (d16 == 0)) {
                                d20 = 0.75;
                            } else {
                                d20 = -1;
                            }
                        }
                    }
                }
            }
        }


        // Zəmanət məbləği (max)
        //=IF(
        //    AND(D6*D20<=3000000,D4="Bir borcalan"),
        //    D6*D20,
        //    IF(
        //        AND(D4="Borcalan qrupu",D6*D20<=6000000),
        //        D6*D20,
        //        IF(
        //            AND(D6*D20>3000000,D4="Bir borcalan",C21),
        //            3000000,
        //            IF(
        //                AND(D6*D20>6000000,D4="Borcalan qrupu"),
        //                6000000,
        //                0
        //            )
        //        )
        //    )
        //)

        if (($("#c2_credit_sum").val() * d20 <= 3000000) && ($("#c2_applicant").val() == 0)) {
            d21 = $("#c2_credit_sum").val() * d20;
        } else {
            if (($("#c2_applicant").val() == 1) && ($("#c2_credit_sum").val() * d20 <= 6000000)) {
                d21 = $("#c2_credit_sum").val() * d20;
            } else {
                if (($("#c2_credit_sum").val() * d20 > 3000000) && ($("#c2_applicant").val() == 0)) {
                    d21 = 3000000;
                } else {
                    if (($("#c2_credit_sum").val() * d20 > 6000000) && ($("#c2_applicant").val() == 1)) {
                        d21 = 6000000;
                    } else {
                        d21 = 0;
                    }
                }
            }
        }


        // Zəmanət məbləği (min)
        //=IF(
        //    D6*15%<15000,
        //    15000,
        //    D6*15%
        //)
        if ($("#c2_credit_sum").val() * 0.15 < 15000) {
            d22 = 15000;
        } else {
            d22 = $("#c2_credit_sum").val() * 0.15;
        }


        // Subsidiya faizi
        //=IF(
        //    D9<=36,
        //    IF(
        //        D7-8<6,
        //        D7-6,
        //        8
        //    ),
        //    IF(
        //        D7-10<6,
        //        D7-6,
        //        10
        //    )
        //)
        if ($("#c2_credit_time").val() <= 36) {
            if ($("#c2_credit_percentage").val() - 8 < 6) {
                D23 = $("#c2_credit_percentage").val() - 6;
            } else {
                D23 = 8;
            }
        } else {
            if ($("#c2_credit_percentage").val() - 10 < 6) {
                D23 = $("#c2_credit_percentage").val() - 6;
            } else {
                D23 = 10;
            }
        }

        // Bankın ödəyəcəyi komissiyalar - Birdəfəlik
        d27 = d21 * config.c2.bokb;

        // Bankın ödəyəcəyi komissiyalar - İllik
        //=IF(
        //    AND(D15="Orta riskli",D16="aşağı",D9>36), +
        //    0.015,
        //    IF(
        //        AND(D15="Orta riskli",D16="aşağı",D9<=12), +
        //        0.01,
        //        IF(
        //            AND(D15="Orta riskli",D16="aşağı",AND(D9>12,D9<=36)), +
        //            0.012,
        //            IF(
        //                AND(D15="Orta riskli",D16="Orta",D9>36), +
        //                0.013,
        //                IF(
        //                    AND(D15="Orta riskli",D16="Orta",D9<=12), +
        //                    0.008,
        //                    IF(
        //                        AND(D15="Orta riskli",D16="orta",AND(D9>12,D9<=36)), +
        //                        0.01,
        //                        IF(
        //                            AND(D15="Orta riskli",D16="Yuxar",D9>36), +
        //                            0.012,
        //                            IF(
        //                                AND(D15="Orta riskli",D16="Yuxarı",D9<=12), +
        //                                0.007,
        //                                IF(
        //                                    AND(D15="Orta riskli",D16="Yuxarı",AND(D9>12,D9<=36)), +
        //                                    0.009,
        //                                    IF(
        //                                        AND(D15="Aşağı riskli",D16="aşağı",D9>36), +
        //                                        0.013,
        //                                        IF(
        //                                            AND(D15="Aşağı riskli",D16="aşağı",D9<=12), +
        //                                            0.008,
        //                                            IF(
        //                                                AND(D15="Aşağı riskli",D16="aşağı",AND(D9>12,D9<=36)), +
        //                                                0.01,
        //                                                IF(
        //                                                    AND(D15="Aşağı riskli",D16="Orta",D9>36), +
        //                                                    0.011,
        //                                                    IF(
        //                                                        AND(D15="Aşağı riskli",D16="Orta",D9<=12), +
        //                                                        0.006,
        //                                                        IF(
        //                                                            AND(D15="Aşağı riskli",D16="orta",AND(D9>12,D9<=36)), +
        //                                                            0.008,
        //                                                            IF(
        //                                                                AND(D15="Aşağı riskli",D16="Yuxarı",D9>36), +
        //                                                                0.01,
        //                                                                IF(
        //                                                                    AND(D15="Aşağı riskli",D16="Yuxarı",D9<=12), +
        //                                                                    0.005,
        //                                                                    IF(
        //                                                                        AND(D15="Aşağı riskli",D16="Yuxarı",AND(D9>12,D9<=36)),
        //                                                                        0.007
        //                                                                    )
        //                                                                )
        //                                                            )
        //                                                        )
        //                                                    )
        //                                                )
        //                                            )
        //                                        )
        //                                    )
        //                                )
        //                            )
        //                        )
        //                    )
        //                )
        //            )
        //        )
        //    )
        //)
        var d15 = $("#c2_risk_degree").val();
        var d9 = $("#c2_credit_time").val();

        if (d15 == 1 && d16 == 0 && d9 > 36) {
            d28 = 0.015;
        } else {
            if (d15 == 1 && d16 == 0 && d9 <= 12) {
                d28 = 0.01;
            } else {
                if (d15 == 1 && d16 == 0 && d9 > 12 && d9 <= 36) {
                    d28 = 0.012;
                } else {
                    if (d15 == 1 && d16 == 1 && d9 > 36) {
                        d28 = 0.013;
                    } else {
                        if (d15 == 1 && d16 == 1 && d9 <= 12) {
                            d28 = 0.008;
                        } else {
                            if (d15 == 1 && d16 == 1 && d9 > 12 && d9 <= 36) {
                                d28 = 0.01;
                            } else {
                                if (d15 == 1 && d16 == 2 && d9 > 36) {
                                    d28 = 0.012;
                                } else {
                                    if (d15 == 1 && d16 == 2 && d9 <= 12) {
                                        d28 = 0.007;
                                    } else {
                                        if (d15 == 1 && d16 == 2 && d9 > 12 && d9 <= 36) {
                                            d28 = 0.009;
                                        } else {
                                            if (d15 == 0 && d16 == 0 && d9 > 36) {
                                                d28 = 0.013;
                                            } else {
                                                if (d15 == 0 && d16 == 0 && d9 <= 12) {
                                                    d28 = 0.008;
                                                } else {
                                                    if (d15 == 0 && d16 == 0 && d9 > 12 && d9 <= 36) {
                                                        d28 = 0.01;
                                                    } else {
                                                        if (d15 == 0 && d16 == 1 && d9 > 36) {
                                                            d28 = 0.011;
                                                        } else {
                                                            if (d15 == 0 && d16 == 1 && d9 <= 12) {
                                                                d28 = 0.006;
                                                            } else {
                                                                if (d15 == 0 && d16 == 1 && d9 > 12 && d9 <= 36) {
                                                                    d28 = 0.008;
                                                                } else {
                                                                    if (d15 == 0 && d16 == 2 && d9 > 36) {
                                                                        d28 = 0.01;
                                                                    } else {
                                                                        if (d15 == 0 && d16 == 2 && d9 <= 12) {
                                                                            d28 = 0.005;
                                                                        } else {
                                                                            if (d15 == 0 && d16 == 2 && d9 > 12 && d9 <= 36) {
                                                                                d28 = 0.007;
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }


        // Bankın ödəyəcəyi komissiyalar - Xidmət haqqı
        //=IF(
        //    D21*0.001<50,
        //    D21*0.001,
        //    50
        //)
        if (d21 * 0.001 < 50) {
            d29 = d21 * 0.001;
        } else {
            d29 = 50;
        }


        if (d19 > 0) $("#d19").text(d19).number(true, 0); else $("#d19").text(0);
        if (d20 > 0) $("#d20").text(d20).number(true, 2); else $("#d20").text("İmtina");
        if (d21 > 0) $("#d21").text(d21).number(true, 2); else $("#d21").text(0);
        if (d22 > 0) $("#d22").text(d22).number(true, 2); else $("#d22").text(0);
        if (D23 > 0) $("#D23").text(D23).number(true, 0); else $("#D23").text(0);

        if (d27 > 0) $("#d27").text(d27); else $("#d27").text(0);
        if (d28 > 0) $("#d28").text(d28 * 100).number(true, 2); else $("#d28").text(0);
        if (d29 > 0) $("#d29").text(d29).number(true, 2); else $("#d29").text(0);

        if ($("#c2_subsidy").val() == 0) {
            subsidiya();
            $("#subsidiyabtn").removeClass("hide");
        } else {
            $("#subsidiyabtn").addClass("hide");
        }

        function subsidiya() {

            function SUM(array, y, x) {
                var total = 0;
                for (var i = 0; i<y; i++) {
                    total += array[i][x];
                }
                return total;
            }

            var subs = []; // Subsidiya massivi
            var D; // Cəmi ödənişin məbləği (Subsidiya nəzərə alınmaqla)
            var E; // Borcalanın aylıq ödənişi
            var F; // Əsas borcun ödənişi
            var G; // Bank %-in ödənişi
            var H; // Subsidiya %-in ödənişi
            var I; // Kredit qalığı
            var d24; // Subsidiya dəyəri

            var D6 = $("#c2_credit_sum").val();
            var D7 = $("#c2_credit_percentage").val();
            var D9 = $("#c2_credit_time").val();
            var D10 = $("#c2_discount_time").val();
            var D12 = $("#c2_subsidy_time").val();


            // =ROUNDUP(-PMT($D$7%/12,D9-D10,D6),3)
            var D32 = Number((-PMT(D7 / 12 / 100, D9 - D10, D6).toFixed(4))); // Kredit sonuncu ödənişi

            //=IF(
            //    B40<=$D$12,
            //    IF(
            //        B40="",
            //        "",
            //        IF(
            //            B40=D9,
            //            D6*($D$7-$D$23)%*30/360,
            //            D6*($D$7-$D$23)%*30/360
            //        )
            //    ),
            //    IF(
            //        B40="",
            //        "",
            //        IF(
            //            B40=$D$9,
            //            D6*(($D$7-$D$23)%)*30/360,
            //            D6*($D$7-$D$23)%*30/360
            //        )
            //    )
            //)
            if (1 <= D12) {
                if (1 == D9) {
                    G = Number((D6 * (D7 - D23) / 100 * 30 / 360).toFixed(4));
                } else {
                    G = Number((D6 * (D7 - D23) / 100 * 30 / 360).toFixed(4));
                }
            } else {
                if (1 == D9) {
                    G = Number((D6 * (D7 - D23) / 100 * 30 / 360).toFixed(4));
                } else {
                    G = Number((D6 * (D7 - D23) / 100 * 30 / 360).toFixed(4));
                }
            }


            //=IF(
            //    B40<=$D$12,
            //    IF(B40="",
            //        "",
            //        IF(
            //            B40=$D$9,
            //            D6*$D$23%*30/360,
            //            D6*$D$23%*30/360
            //        )
            //    ),
            //    0
            //)
            if (1 <= D12) {
                if (1 == D9) {
                    H = Number((D6 * D23 / 100 * 30 / 360).toFixed(4));
                } else {
                    H = Number((D6 * D23 / 100 * 30 / 360).toFixed(4));
                }
            } else {
                H = 0;
            }


            //=IF(
            //    B40="",
            //    "",
            //    IF(
            //        B40>$D$10,
            //        $D$32
            //        (G40+H40)
            //    )
            //)
            if (1 > D10) {
                D = D32;
            } else {
                D = G + H;
            }


            //=IF(
            //    B40="",
            //    "",
            //    IF(
            //        B40=$D$9,
            //        $D$6-SUM($F$39:F40),
            //        D40-G40-H40
            //    )
            //)

            if (1 == D9) {
                F = D6;
            } else {
                F = D - G - H;
            }

            E = F + G;
            I = D6 - F;

            subs.push([1, today(1), D, E, F, G, H, I]);


            for (i = 1; i < D9; i++) {

                //=IF(
                //    B41<=$D$12,
                //    IF(
                //        B41="",
                //        "",
                //        IF(
                //            B41=$D$9,
                //            I40*($D$7-$D$23)%*30/360,
                //            I40*($D$7-$D$23)%*30/360
                //        )
                //    ),
                //    IF(
                //        B41="",
                //        "",
                //        IF(
                //            B41=$D$9,
                //            I40*$D$7%*30/360,
                //            I40*$D$7%*30/360
                //        )
                //    )
                //)
                if (i <= D12) {
                    if (i == D9) {
                        G = Number((subs[i - 1][7] * (D7 - D23) / 100 * 30 / 360).toFixed(4));
                    } else {
                        G = Number((subs[i - 1][7] * (D7 - D23) / 100 * 30 / 360).toFixed(4));
                    }
                } else {
                    if (i == D9) {
                        G = Number((subs[i - 1][7] * D7 / 100 * 30 / 360).toFixed(4));
                    } else {
                        G = Number((subs[i - 1][7] * D7 / 100 * 30 / 360).toFixed(4));
                    }
                }


                //=IF(
                //    B41<=$D$12,
                //    IF(
                //        B41="",
                //        "",
                //        IF(
                //            B41=$D$9,
                //            I40*$D$23%*30/360,
                //            I40*$D$23%*30/360
                //        )
                //    ),
                //    IF(
                //        B41="",
                //        "",
                //        0
                //    )
                //)
                if (i <= D12) {
                    if (i == D9) {
                        H = Number((subs[i - 1][7] * D23 / 100 * 30 / 360).toFixed(4));
                    } else {
                        H = Number((subs[i - 1][7] * D23 / 100 * 30 / 360).toFixed(4));
                    }
                } else {
                    H = 0;
                }


                //=IF(
                //    B41="",
                //    "",
                //    IF(
                //        B41>$D$10,
                //        $D$32,
                //        (G41+H41)
                //    )
                //)
                if (i > D10) {
                    D = D32;
                } else {
                    D = G + H;
                }

                //=IF(
                //    B41="",
                //    "",
                //    IF(
                //        B41=$D$9,
                //        $D$6-SUM($F$39:F40),
                //        D41-G41-H41
                //    )
                //)
                if (i == D9) {
                    F = D6 - SUM(subs, i, 4);
                } else {
                    F = D - G - H;
                }

                E = F + G;
                I = subs[i - 1][7] - F;

                subs.push([i+1, today(i+1), D, E, F, G, H, I]);
            }

            d24 = SUM(subs, D9, 6);
            if (d24 > 0) $("#d24").text(d24).number(true, 2); else $("#d24").text(0);

            var html = "";
            for (i = 0; i < subs.length; i++) {
                html += "<tr>";
                html += "<td>" + subs[i][0] + "</td>";
                html += "<td style='width: 160px'>" + subs[i][1] + "</td>";
                html += "<td>" + (subs[i][2]).toFixed(2) + "</td>";
                html += "<td>" + (subs[i][3]).toFixed(2) + "</td>";
                html += "<td>" + (subs[i][4]).toFixed(2) + "</td>";
                html += "<td>" + (subs[i][5]).toFixed(2) + "</td>";
                html += "<td>" + (subs[i][6]).toFixed(2) + "</td>";
                html += "<td>" + (subs[i][7]).toFixed(2) + "</td>";
                html += "</tr>";
            }
            $("#subsidiyacon").html(html);
        }
    }


    $("#calculator2 input").on('change', function () {
        hesabla2();
    });

    $("#calculator2 select").change(function () {
        hesabla2();
    });

    $(document).ready(function () {
        hesabla2();
    });
    // IKINCI KALKULTAYOR />





    // UCUNCU KALKULTAYOR
    var c3_kredit_history = 0; // Kredit tarixçəsinə əsasən
    var c3_salary = 0; // Orta aylıq gəliri
    var c3_family_count = 0; // Ailə üzvlərinin sayı
    var c3_other = 0; // Digər öhdəliklər
    var c3_age = 0; // Kirayəçinin yaşı (mak 60 yaş)

    var c3_period= 0; //  Kirayənin müddəti (aylarla)  (ok)
    var c3_11_rezult = 0; //  Kirayənin müddəti (aylarla)  (ok)
    var c3_13 = 0; // Kirayə mənzilin Alış qiyməti (ok)
    var c3_14 = 0; // Qabaqcadan ödəniləcək məbləğ
    var c3_monthly_payment = 0; // Aylıq kirayə haqqının maksimum məbləği ok()


    function hesabla3() {
        c3_kredit_history = $('#c3_kredit_history').find(":selected").val();
        $('#c3_salary_range').attr("max", config.c3.mi);
        c3_salary = $('#c3_salary').val();
        c3_single = $('#c3_family_status').find(":selected").val();

        if (c3_single == '1') {
            $('#c3_family_count_range').attr('max', 1);
            $('#c3_family_count_range').attr('min',1);
            $('#c3_family_count').val(1);
        }
        else {

            $('#c3_family_count_range').attr('max', 10);
            $('#c3_family_count_range').attr('min',2);
            if( $('#c3_family_count').val() < 2){
                 $('#c3_family_count').val(2);
            }
        }

        c3_family_count = $('#c3_family_count').val();
        if(c3_family_count == '0'){
			c3_family_count = 1;
			$("#c3_family_count").val(c3_family_count);
        }
        c3_other = $('#c3_other').val();
        $('#c3_other_range').attr("max", config.c3.ol);
        c3_period = $('#c3_11').val();

        var bidthday = $("#birthday .c3_month").val() + "/" + $("#birthday .c3_day").val() + "/" + $("#birthday .c3_year").val();

            var now = new Date();
            var nowYear = now.getFullYear();
            var nowMonth = now.getMonth()+1;

            var pastYear =  $("#birthday .c3_year").val();
            var pastMonth = $("#birthday .c3_month").val();
            // if(nowMonth > pastMonth){
            //     pastYear = pastYear - 1;
            // }

            var age = nowYear - pastYear;
            c3_age = age;

            //var monthCount2 = Number(((EDATE(bidthday, 755) - TODAY()) / 30.4).toFixed(0));
            var monthCount2 = Number(((EDATE(bidthday, 840) - TODAY()) / 30.4).toFixed(0));

        //  Kirayənin müddəti (aylarla)
        if (c3_age <= 45) {
            monthCount1 = 300
            if(c3_period > 300){
                alert("Kredit müddəti 300 aydan cox ola bilməz");
                $('#c3_11').val(300);
                $('#c3_11_rezult').html(300);
                $('#c3_11_range').attr("max", 300);
                $('#c3_11_range').attr("value", 300);
            }
            else{
                if(c3_period < 36){
                    alert("Kiraya ayları min 36 ay olmalıdır");
                    $('#c3_11').val(36);
                    $('#c3_11_rezult').html(36);
                    $('#c3_11_range').attr("max", 300);
                    $('#c3_11_range').attr("value", 36);
                }
                else{
                 $('#c3_11').val(c3_period);
                 $('#c3_11_rezult').html(c3_period);
                 $('#c3_11_range').attr("max", 300);
                 $('#c3_11_range').attr("value", c3_period);
                }
            }

        }
        else if(c3_age > 60){
            alert("Müraciət anına yaş 60-dan yuxarı olmamalır");
        }
        else{
            // monthCount2 = (63 - c3_age) * 12;
            if(c3_period <= monthCount2){
                if(c3_period < 36){
                    alert("kiraya ayları min 36 ay olmalıdır");
                    $('#c3_11').val(36);
                    $('#c3_11_rezult').html(36);
                    $('#c3_11_range').attr("max", monthCount2);
                    $('#c3_11_range').attr("value", 36);
                }
                else{
                    $('#c3_11').val(c3_period);
                    $('#c3_11_rezult').html(c3_period);
                    $('#c3_11_range').attr("max", monthCount2);
                    $('#c3_11_range').attr("value", c3_period);
                }

            }
            else{
                $('#c3_11').val(monthCount2);
                $('#c3_11_rezult').html(monthCount2);
                $('#c3_11_range').attr("max", monthCount2);
                $('#c3_11_range').attr("value", monthCount2);
                c3_period = monthCount2;
            }
        }


       // Aylıq kirayə haqqının maksimum məbləği

        //  =IF($C$4="Müsbət",IF($C$7="Evli",($C$6-($C$8*$F$7)-$C$9)*$F$9,($C$6-($F$6+$F$6*(($C$8-1)/2))-$C$9)*$F$8),

        //c3_kredit_history += 0;
        switch(c3_kredit_history)
        {
        	case '0':
	        	if (c3_single == 1)
	        		c3_monthly_payment = (c3_salary - 0 - c3_other) * 1;//0.5;
	        	else
	        		c3_monthly_payment = (c3_salary - c3_other) * 1;//0.7;
	        	break;

	        case '2':
	        	if (c3_single == 1)
		            c3_monthly_payment = (c3_salary - 190/2 - c3_other) * 1;//0.4;
		        else
		            c3_monthly_payment = (c3_salary - c3_family_count*190/2 - c3_other) * 1;//0.8;
	        	break;
	        case '1':
	        	if(c3_single == 1)
		            c3_monthly_payment = (c3_salary - 190 - c3_other) * 1;//0.3;
		        else
		            c3_monthly_payment = (c3_salary - c3_family_count*190) * 1;//0.7;
	        	break;
	    }
        /* old Musbet
        if (c3_kredit_history == 0 && c3_single == 1) {
            c3_monthly_payment = (c3_salary - (c3_family_count * 0) - c3_other) * 0.7;
        }

        else if(c3_kredit_history == 0 && c3_single == 0)
        {
            c3_monthly_payment = (c3_salary - (180 + 180 * ((c3_family_count-1)/2)) - c3_other) * 0.5;
        }
        */

        // IF($C$4="Qənaətbəxş",IF($C$7="Evli",($C$6-(($C$8*$G$7)/2)-$C$9)*$G$9,($C$6-($G$6+$G$6*(($C$8-1)/2))-$C$9)*$G$8)
        /* old Qənaətbəxş
        else if(c3_kredit_history == 1 && c3_single == 1)
        {
            c3_monthly_payment = (c3_salary - ((c3_family_count * 180)/2) - c3_other) * 0.8;
        }
        else if(c3_kredit_history == 1 && c3_single == 0)
        {
            c3_monthly_payment = (c3_salary - (180 + 180 * ((c3_family_count-1)/2)) - c3_other) * 0.4;
        }
        */

       // IF($C$4="Mənfi",IF($C$7="Evli",($C$6-($C$8*$H$7)-$C$9)*$H$9,($C$6-($H$6+H6*(($C$8-1)/2))-$C$9)*$H$8))))
       /*old Menfi
        else if(c3_kredit_history == 2 && c3_single == 1)
        {
            c3_monthly_payment = (c3_salary - (c3_family_count * 180) - c3_other) * 0.7;
        }
        else if(c3_kredit_history == 2 && c3_single == 0)
        {
            c3_monthly_payment = (c3_salary - (180 + 180 * ((c3_family_count-1)/2)) - c3_other) * 0.3;
        }
        */


       // Kirayə mənzilin Alış qiyməti
        c3_13 = c3_monthly_payment * c3_period;

        // Qabaqcadan ödəniləcək məbləğ
        c3_14 = c3_monthly_payment * 12;


        // $("#c3_13").html(c3_13);
        // $("#c3_14").html(c3_14);
        // $("#c3_15").html(c3_monthly_payment);

        if (c3_13 > 0) $("#c3_13").html(c3_13.toFixed(2)); else $("#c3_13").text(0);
        if (c3_14 > 0) $("#c3_14").html(c3_14.toFixed(2)); else $("#c3_14").text(0);
        if (c3_monthly_payment > 0) $("#c3_15").html(c3_monthly_payment.toFixed(2)); else $("#c3_15").text(0);

    }

    $("#calculator3 input").on('change', function () {
        hesabla3();
    });

    $("#calculator3 select").change(function () {
        //$('#c3_11').val(300);
        hesabla3();
    });



    $(document).ready(function () {
        hesabla3();
    });
});



