JotForm.newDefaultTheme = true;
JotForm.extendsNewTheme = false;
JotForm.singleProduct = false;
JotForm.newPaymentUIForNewCreatedForms = false;
JotForm.newPaymentUI = true;
JotForm.init(function() {
  /*INIT-START*/
  JotForm.setPhoneMaskingValidator('input_21_full', '(###) ###-####');
  JotForm.calendarMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  JotForm.appointmentCalendarDays = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
  JotForm.calendarOther = "Today";
  window.initializeAppointment({
    "text": {
      "text": "Question",
      "value": "Preferred Date and Time"
    },
    "labelAlign": {
      "text": "Label Align",
      "value": "Top",
      "dropdown": [
        ["Auto", "Auto"],
        ["Left", "Left"],
        ["Right", "Right"],
        ["Top", "Top"]
      ]
    },
    "required": {
      "text": "Required",
      "value": "Yes",
      "dropdown": [
        ["No", "No"],
        ["Yes", "Yes"]
      ]
    },
    "description": {
      "text": "Hover Text",
      "value": "",
      "textarea": true
    },
    "slotDuration": {
      "text": "Slot Duration",
      "value": "60",
      "dropdown": [
        [15, "15 min"],
        [30, "30 min"],
        [45, "45 min"],
        [60, "60 min"],
        ["custom", "Custom min"]
      ],
      "hint": "Select how long each slot will be."
    },
    "startDate": {
      "text": "Start Date",
      "value": ""
    },
    "endDate": {
      "text": "End Date",
      "value": ""
    },
    "intervals": {
      "text": "Intervals",
      "value": [{
        "from": "09:00",
        "to": "17:00",
        "days": ["Mon", "Tue", "Wed", "Thu", "Fri"]
      }],
      "hint": "The hours will be applied to the selected days and repeated."
    },
    "useBlockout": {
      "text": "Blockout Custom Dates",
      "value": "No",
      "dropdown": [
        ["No", "No"],
        ["Yes", "Yes"]
      ],
      "hint": "Disable certain date(s) in the calendar."
    },
    "blockoutDates": {
      "text": "Blockout dates",
      "value": [{
        "startDate": "",
        "endDate": ""
      }]
    },
    "useLunchBreak": {
      "text": "Lunch Time",
      "value": "Yes",
      "dropdown": [
        ["No", "No"],
        ["Yes", "Yes"]
      ],
      "hint": "Enable lunchtime in the calendar."
    },
    "lunchBreak": {
      "text": "Lunchtime hours",
      "value": [{
        "from": "12:00",
        "to": "14:00"
      }]
    },
    "timezone": {
      "text": "Timezone",
      "value": "America/New_York (GMT-4:00)"
    },
    "timeFormat": {
      "text": "Time Format",
      "value": "",
      "dropdown": [
        ["24 Hour", "24 Hour"],
        ["AM/PM", "AM/PM"]
      ],
      "icon": "images/blank.gif",
      "iconClassName": "toolbar-time_format_24"
    },
    "months": {
      "value": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
      "hidden": true
    },
    "days": {
      "value": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
      "hidden": true
    },
    "startWeekOn": {
      "text": "Start Week On",
      "value": "",
      "dropdown": [
        ["Monday", "Monday"],
        ["Sunday", "Sunday"]
      ],
      "toolbar": false
    },
    "rollingDays": {
      "text": "Rolling Days",
      "value": "",
      "toolbar": false
    },
    "prevMonthButtonText": {
      "text": "Previous month",
      "value": ""
    },
    "nextMonthButtonText": {
      "text": "Next month",
      "value": ""
    },
    "prevYearButtonText": {
      "text": "Previous year",
      "value": ""
    },
    "nextYearButtonText": {
      "text": "Next year",
      "value": ""
    },
    "prevDayButtonText": {
      "text": "Previous day",
      "value": ""
    },
    "nextDayButtonText": {
      "text": "Next day",
      "value": ""
    },
    "appointmentType": {
      "hidden": true,
      "value": "single"
    },
    "dateFormat": {
      "hidden": true,
      "value": "mm/dd/yyyy"
    },
    "maxAttendee": {
      "hidden": true,
      "value": "5"
    },
    "minScheduleNotice": {
      "hidden": true,
      "value": "3"
    },
    "name": {
      "hidden": true,
      "value": "preferredDate22"
    },
    "order": {
      "hidden": true,
      "value": "4"
    },
    "qid": {
      "toolbar": false,
      "value": "input_22"
    },
    "type": {
      "hidden": true,
      "value": "control_appointment"
    },
    "id": {
      "toolbar": false,
      "value": "22"
    },
    "qname": {
      "toolbar": false,
      "value": "q22_preferredDate22"
    },
    "cdnconfig": {
      "CDN": "https://cdn.jotfor.ms/"
    },
    "passive": false,
    "formProperties": {
      "products": false,
      "highlightLine": "Enabled",
      "coupons": false,
      "useStripeCoupons": false,
      "taxes": false,
      "comparePaymentForm": "",
      "paymentListSettings": false,
      "newPaymentUIForNewCreatedForms": false,
      "formBackground": "#fff"
    },
    "formID": 222593784133460,
    "isPaymentForm": false,
    "isOpenedInPortal": false,
    "isCheckoutForm": false,
    "cartProducts": [],
    "isFastCheckoutShoppingApp": false,
    "translatedProductListTexts": false,
    "productListColors": false,
    "themeVersion": "v2"
  });
  /*INIT-END*/
});
JotForm.prepareCalculationsOnTheFly([null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, {
  "name": "submitForm",
  "qid": "17",
  "text": "Submit",
  "type": "control_button"
}, {
  "name": "clickTo",
  "qid": "18",
  "text": "Follow Up Call",
  "type": "control_head"
}, null, {
  "name": "fullName20",
  "qid": "20",
  "text": "Full Name",
  "type": "control_fullname"
}, {
  "name": "phoneNumber21",
  "qid": "21",
  "text": "Phone Number",
  "type": "control_phone"
}, {
  "name": "preferredDate22",
  "qid": "22",
  "text": "Preferred Date and Time",
  "type": "control_appointment"
}]);
setTimeout(function() {
  JotForm.paymentExtrasOnTheFly([null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, {
    "name": "submitForm",
    "qid": "17",
    "text": "Submit",
    "type": "control_button"
  }, {
    "name": "clickTo",
    "qid": "18",
    "text": "Follow Up Call",
    "type": "control_head"
  }, null, {
    "name": "fullName20",
    "qid": "20",
    "text": "Full Name",
    "type": "control_fullname"
  }, {
    "name": "phoneNumber21",
    "qid": "21",
    "text": "Phone Number",
    "type": "control_phone"
  }, {
    "name": "preferredDate22",
    "qid": "22",
    "text": "Preferred Date and Time",
    "type": "control_appointment"
  }]);
}, 20);