function lettersonly(input) {
    //i for uppercase
    //g is for global
    let regex = /[^a-z]/gi;
    input.value = input.value.replace(regex, "");
}