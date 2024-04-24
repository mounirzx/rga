import puppeteer from 'puppeteer';

(async () => {
    const browser = await puppeteer.launch({ headless: false });
    const page = await browser.newPage();
    
    await page.goto('https://form.jotform.com/211533130885350?language=fr');
    
    // Wait for the iframe containing the widget to load
     // Wait for the iframe containing the widget to load
     await page.waitForSelector('iframe[src*="widgets.jotform.io/termsScroll"]');

     // Get the iframe element handle
     const frameHandle = await page.$('iframe[src*="widgets.jotform.io/termsScroll"]');
     
     // Switch to the context of the iframe
     const frame = await frameHandle.contentFrame();
 
     // Now you can interact with elements inside the iframe
     const checkbox = await frame.$('input#userInput[type="checkbox"]');
     await checkbox.click();
    // Close the browser
    // await browser.close();
})();
