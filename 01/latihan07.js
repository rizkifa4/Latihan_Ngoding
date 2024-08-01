class ValidationError extends Error {
    constructor(message) {
        (super(message));
        this.name = "ValidationError";
    }
}

function validateNumberInput(n) {
    if (typeof n !== "number") {
        throw new ValidationError("Input must be a number");
    }
    return n;
}

const DettectNumber = (n) => {
    try {
        return valiidateNumberInput(n);
    } catch (error) {
        if (error instanceof ValidationError) {
            return error.message;
        }
    } if (n === 0) {
        return "Number is 0";
    } else if (n > 0) {
        return "Number is positive";
    }
    return "Number is negative";
}

console.log(DettectNumber(false));

