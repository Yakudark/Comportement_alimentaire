const jsdom = require("jsdom");
const { JSDOM } = jsdom;

const dom = new JSDOM("<!DOCTYPE html><html><body></body></html>");
global.window = dom.window;


Object.defineProperty(window, 'TESTING', {
    value: true,
});

const { getIMC, kcalPerQuantity, ValidateEmail, validateName } = require('../JS/index.js');

describe('isValidIMC', () => {
    it('should return true if IMC is valid', () => {
        expect(getIMC(65, 1.65)).toEqual(23.9);
    });
});

describe('isValidKcal', () => {
    it('should return true if kcal for this quantity is correct', () => {
        expect(kcalPerQuantity(90, 160)).toEqual(144);
    });
});

describe('isValidName', () => {
    it('should return true if name is valid', () => {
        expect(validateName("François")).toEqual(true);
        expect(validateName("Maïlys")).toEqual(true);
        expect(validateName("Hélène")).toEqual(true);
    });

    it('should return false for an invalid name', () => {
        expect(validateName(111)).toBe(false);
        expect(validateName("Théo$")).toBe(false);
        expect(validateName('Céline=')).toBe(false);
        expect(validateName('Lina*')).toBe(false);
        expect(validateName('Barbara&')).toBe(false);
    });
});

describe('isValidEmail', () => {
    it('should return true if email is valid', () => {
        expect(ValidateEmail("martins.dupont@outlook.fr")).toEqual(true);
    });

    it('should return false for an invalid email', () => {
        expect(ValidateEmail("martin")).toBe(false);
        expect(ValidateEmail("martin.dupont")).toBe(false);
        expect(ValidateEmail('martin.dupont@')).toBe(false);
        expect(ValidateEmail('martin.dupont@outlook')).toBe(false);
        expect(ValidateEmail('martin.dupont@outlook.')).toBe(false);
    });
});