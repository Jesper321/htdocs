// variables
    let name='Mosh';
    console.log(name);

//cannot be a reserved keyword
//should be meaningful
//cannot start with a number (1name)
//cannot contain a space or hphen (-)
//are case-sensitive

    let firstName ='mosh';
    let lastName = 'Hamedani';

// constants
    const interestRate = 0.3;
    interestRate = 1;
    console.log(interestRate);

// primitive and dynamic types
    let name = 'mosh'; // string literal
    let age = 30; // number litreral
    let isApproved = true; // boolean literal
    let firstName = undefined;
    let selectedColor = null;

// objects
    let person = {
    name: 'mosh',
    age: 30
};
    // Dot Notation
    person.name = 'john';

    // Bracket Notation
    let selection = 'name';
    person[selection] = 'mary';

    console.log(person.name);


// Arrays
    let selectedColors = ['red', 'blue'];
    selectedColors[2] = 1;
    console.log(selectedColors.length);

// Functions
    function greet(name, lastName) {
    console.log('hello ' + name + ' ' + lastname);
}

    greet('john', 'smith'); // error

// // types functions

    // performing a task
    function greet(name, lastName) {
    console.log('hello ' + name + ' ' + lastname);
}

    // calculating a value
    function square(number) {
    return number * number;
}

console.log(square(2));;