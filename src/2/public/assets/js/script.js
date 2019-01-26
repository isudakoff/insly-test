function formSubmit() {
    let date = new Date();

    if (date.getDay() === 5 && date.getHours() === 15 && date.getMinutes() === 20) {
        user_time.value = 1;
    }
}