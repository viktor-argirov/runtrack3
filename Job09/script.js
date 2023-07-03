function tri(numbers, order) {
    if (order === "asc") {
        // Tri dans l'ordre croissant
        for (var i = 0; i < numbers.length - 1; i++) {
            for (var j = i + 1; j < numbers.length; j++) {
                if (numbers[j] < numbers[i]) {
                    var temp = numbers[i];
                    numbers[i] = numbers[j];
                    numbers[j] = temp;
                }
            }
        }
    } else if (order === "desc") {
        // Tri dans l'ordre décroissant
        for (var i = 0; i < numbers.length - 1; i++) {
            for (var j = i + 1; j < numbers.length; j++) {
                if (numbers[j] > numbers[i]) {
                    var temp = numbers[i];
                    numbers[i] = numbers[j];
                    numbers[j] = temp;
                }
            }
        }
    }
    return numbers;
}

var numbers = [5, 2, 8, 1, 9];
var order = "asc";
var result = tri(numbers, order);
console.log(result);
