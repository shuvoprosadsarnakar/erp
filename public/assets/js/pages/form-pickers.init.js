! function (e) {
    "use strict";
    var i = function () {};
    i.prototype.init = function () {
        e("#basic-datepicker").flatpickr(), e("#datetime-datepicker").flatpickr({
            enableTime: !0,
            dateFormat: "Y-m-d H:i"
        }), e("#humanfd-datepicker").flatpickr({
            altInput: !0,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d"
        }), e("#minmax-datepicker").flatpickr({
            minDate: "2020-01",
            maxDate: "2020-03"
        }), e("#disable-datepicker").flatpickr({
            onReady: function () {
                this.jumpToDate("2025-01")
            },
            disable: ["2025-01-10", "2025-01-21", "2025-01-30", new Date(2025, 4, 9)],
            dateFormat: "Y-m-d"
        }), e("#multiple-datepicker").flatpickr({
            mode: "multiple",
            dateFormat: "Y-m-d"
        }), e("#conjunction-datepicker").flatpickr({
            mode: "multiple",
            dateFormat: "Y-m-d",
            conjunction: " :: "
        }), e("#range-datepicker").flatpickr({
            mode: "range"
        }), e("#inline-datepicker").flatpickr({
            inline: !0
        }), e("#basic-timepicker").flatpickr({
            enableTime: !0,
            noCalendar: !0,
            dateFormat: "H:i"
        }), e("#24hours-timepicker").flatpickr({
            enableTime: !0,
            noCalendar: !0,
            dateFormat: "H:i",
            time_24hr: !0
        }), e("#minmax-timepicker").flatpickr({
            enableTime: !0,
            noCalendar: !0,
            dateFormat: "H:i",
            minDate: "16:00",
            maxDate: "22:30"
        }), e("#preloading-timepicker").flatpickr({
            enableTime: !0,
            noCalendar: !0,
            dateFormat: "H:i",
            defaultDate: "01:45"
        }), e("#basic-colorpicker").colorpicker(), e("#hexa-colorpicker").colorpicker({
            format: "auto"
        }), e("#component-colorpicker").colorpicker({
            format: null
        }), e("#horizontal-colorpicker").colorpicker({
            horizontal: !0
        }), e("#inline-colorpicker").colorpicker({
            color: "#DD0F20",
            inline: !0,
            container: !0
        }), e(".clockpicker").clockpicker({
            donetext: "Done"
        }), e("#single-input").clockpicker({
            placement: "bottom",
            align: "left",
            autoclose: !0,
            default: "now"
        }), e("#check-minutes").click(function (i) {
            i.stopPropagation(), e("#single-input").clockpicker("show").clockpicker("toggleView", "minutes")
        })
    }, e.FormPickers = new i, e.FormPickers.Constructor = i
}(window.jQuery),
function (e) {
    "use strict";
    e.FormPickers.init()
}(window.jQuery);
