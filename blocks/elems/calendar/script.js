$(document).ready(function() {

    let monthList = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'October', 'November', 'Dec'];
    let dayOfWeek = ['Su','Mo','Tu','We','Th','Fr','Sa'];
    let date = new Date();
    let dateCalendar = new Date(date.getFullYear(),date.getMonth(),date.getDate());

    addCalendar(dateCalendar);

    $('.calendar .plus').on('click',function () {
        dateCalendar.setMonth(dateCalendar.getMonth() + 1);
        addCalendar(dateCalendar);
    });
    $('.calendar .minus').on('click',function () {
        dateCalendar.setMonth(dateCalendar.getMonth() - 1);
        addCalendar(dateCalendar);
    });

    function addCalendar(dateCalendar){

        //Объявление переменных
        let thisMonth = new Date().getMonth();
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
        let i, j;
        let daysForNewMonth;

        //Подсчет количества дней до конца недели
        daysForNewMonth = 6 - thisDate.lastDayOfWeekCalendar;
        if(daysForNewMonth === 0 ){
            daysForNewMonth = 7;
        }

        //Формирование календаря
        result += '<tr>';
        dayOfWeek.forEach(function (item, i, dayOfWeek) {
            result += '<th>' + item + '</th>';
        });
        result += '</tr><tr>';
        for (i = 0; i < thisDate.firstDayOfWeekCalendar; i++) {
            result += '<td></td>';
        }
        for (j = 1; j <= thisDate.lastDayCalendar; j++){
            if (j === thisDate.dayCalendar && thisDate.monthCalendar === thisMonth) {
                result += '<td class = "red">' + j + '</td>';
            } else {
                result += '<td>' + j + '</td>';
            }

            if (((i+j) % 7) === 0) {
                result += '</tr><tr>';
            }
        }
        for (i = 0; i < daysForNewMonth; i++) {
            result += '<td></td>';
        }
        result += '</tr>';

        //Вывод календаря в таблицу
        $('.calendar .date span').text(monthList[thisDate.monthCalendar] + ' ' + thisDate.yearCalendar);
        $('.calendar table').html(result);
    }
});

