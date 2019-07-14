$(document).ready(function() {

    let monthList = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
    let dayOfWeek = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    let dateCalendar = new Date();
    let firstdateCalendar = new Date(dateCalendar.getFullYear(),dateCalendar.getMonth(),1);
    let lastdateCalendar = new Date(dateCalendar.getFullYear(),dateCalendar.getMonth() + 1,0);
    let thisDate = {
        'monthCalendar'          : dateCalendar.getMonth(),
        'yearCalendar'           : dateCalendar.getFullYear(),
        'dayCalendar'            : dateCalendar.getDate(),
        'lastDayCalendar'        : lastdateCalendar.getDate(),
        'dayOfWeekCalendar'      : dateCalendar.getDay(),
        'lastDayOfWeekCalendar'  : lastdateCalendar.getDay(),
        'firstDayOfWeekCalendar' : firstdateCalendar.getDay()
    };

    let result = '';

    result += '<tr>';
    dayOfWeek.forEach(function (item, i, dayOfWeek) {
        result += '<th>' + item + '</th>';
    });
    result += '</tr>';

    $('.calendar span').text(thisDate.yearCalendar);
    $('.calendar table').html(result);
    console.log(thisDate.lastDayOfWeekalendar);
});