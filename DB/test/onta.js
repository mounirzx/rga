import puppeteer from "puppeteer";

(async () => {
  const browser = await puppeteer.launch({
    headless: false, // Launch in headful mode
    executablePath:
      "C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe", // Use Chrome instead of Chromium
  });
  const page = await browser.newPage();
  await page.setViewport({
    width: 1600,
    height: 1000,
    deviceScaleFactor: 1,
  });

  await page.goto("http://127.0.0.1:5500/index.html"); // Replace "http://127.0.0.1:5500/index.html" with the actual URL of your form.

  // Wait for the "name" input field to be present and become clickable
  await page.waitForSelector("#name");

  // Type your name into the "name" input field
  await page.type("#name", "testa", { delay: 100 }); // Replace "testa" with the name you want to enter.

  // Wait for the "email" input field to be present and become clickable
  await page.waitForSelector("#email");

  await page.goto("http://127.0.0.1:5500/index.html"); // Replace "http://127.0.0.1:5500/index.html" with the actual URL of your form.

  // Type your email into the "email" input field
  await page.type("#email", "test@test.com", { delay: 100 }); // Replace "test@test.com" with the email you want to enter.

  // Check the checkbox with ID "terms"
  await page.click("#terms");

  // Select the radio button with ID "gender-female"
  await page.click("#gender-female");

  // Select "Option 2" from the dropdown with ID "select-option"
  await page.select("#select-option", "option2");

  // Type text into the textarea with ID "message"
  await page.type("#message", "This is a sample message.", { delay: 50 });

  // Attach a local file to the file input with ID "file-upload"
  const fileInput = await page.$("#file-upload");
  await fileInput.uploadFile("./path/to/your/file.pdf"); // Replace "./path/to/your/file.pdf" with the actual path to the file you want to upload.

  // Type a date into the date input with ID "date-input"
  await page.type("#date-input", "2023-28-7");

  // Wait for the "Submit" button to be present and become clickable
  await page.waitForSelector("button[type='submit']");

  // Simulate a click on the "Submit" button and log the event
  await page.evaluate(() => {
    const submitButton = document.querySelector("button[type='submit']");
    submitButton.addEventListener("click", () => {
      alert("succes");
    });
    submitButton.click();
  });

  // Take a screenshot after the click
  await page.screenshot({
    path: "./screens/samplechapters1.jpg", // You can change the file name and path as per your preference.
    fullPage: true,
  });

  // Close the browser
  await browser.close();
})();
