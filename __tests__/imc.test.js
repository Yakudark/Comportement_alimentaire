const jsdom = require("jsdom");
const { JSDOM } = jsdom;

const dom = new JSDOM("<!DOCTYPE html><html><body></body></html>");
global.window = dom.window;


Object.defineProperty(window, 'TESTING', {
    value: true,
});

const getIMC = require('../JS/index.js');

describe('isValidIMC', () => {
    // Validate imc
    it('should return true if IMC is valid', () => {
        expect(getIMC(65, 1.65)).toEqual(23.9);
    });

});