var date_ = new Date();
// console.log("=>: ", date_.setTime(date_.getTime() + (60 * 60)))
// console.log("currentDateTime: ", date_.getTime())
/**Set future time on the same day */
var x = date_.setTime(date_.getTime() + (60 * 60 * 60));
// Full date-time value
console.warn("val: ", new Date(x))

console.log("--------------------Separator-----------------");

/**Current time value */
var currentDate = new Date();
// console.log("currentDateTime: ", currentDate.getTime())
// Full date-time value
console.log(new Date(currentDate.getTime()))






/**CHROME BrOWSER OUTPUT */
// var date_ = new Date();
// // console.log("=>: ", date_.setTime(date_.getTime() + (60 * 60)))
// var x = date_.setTime(date_.getTime() + (60 * 60 * 60));
// console.warn("val: ", new Date(x))

// console.log("-------------------------------------");

// var yDate = new Date();
// console.log("yDateTime: ", yDate.getTime())
// console.log(new Date(yDate.getTime()))

/**CHROME BrOWSER OUTPUT */
// VM51:4 val:  Mon Nov 13 2023 09:34:20 GMT+0100 (West Africa Standard Time)
// VM51:6 -------------------------------------
// VM51:9 yDateTime:  1699864244980
// VM51:10 Mon Nov 13 2023 09:30:44 GMT+0100 (West Africa Standard Time)
