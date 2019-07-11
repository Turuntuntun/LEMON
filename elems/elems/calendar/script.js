$(document).ready(function() {

    let monthList = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
    let dayOfWeek = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    let dateCalendar = new Date();
    let thisDate = {
        'monthCalendar'    : dateCalendar.getMonth(),
        'yearCalendar'     : dateCalendar.getFullYear(),
        'dayCalendar'      : dateCalendar.getDate(),
        'dayOfWeekalendar' : dateCalendar.getDay()
    };

    let result = '';

    result += '<tr>';
    dayOfWeek.forEach(function (item, i, dayOfWeek) {
        result += '<th>' + item + '</th>';
    });
    result += '</tr>';

    $('.calendar span').text(thisDate.yearCalendar);
    $('.calendar table').html(result);
    console.log(result);
});