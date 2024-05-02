import puppeteer from "puppeteer";
import { rename } from "fs";
(async () => {
  const browser = await puppeteer.launch({
    headless: false,
    executablePath:
      "C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe",
  });
  const page = await browser.newPage();
  await page.setViewport({
    width: 1600,
    height: 1000,
    deviceScaleFactor: 1,
  });

  // Navigate to Login page and log in
  await page.goto("http://localhost:3000/#/Login");
  await page.type("#email", "farouk", { delay: 100 });
  await page.type("#password", "123", { delay: 100 });
  await page.click("button[type='submit']");
  await page.waitForNavigation(); // Wait for page navigation to complete

  // Navigate to the "Content" page
  await page.goto("http://localhost:3000/#/Content");

  // Click on the "Bond vert" link
  await page.click('[data-testid="bond-vert-link"]');

  // Optionally, add a delay here to observe the hover effect before the click, using the recommended approach
  await new Promise((resolve) => setTimeout(resolve, 1000)); // Adjust the delay as needed

  // Since you've successfully navigated to the "AddBondVert" page:
  await page.goto("http://localhost:3000/#/AddBondVert");

  const inputFields = await page.$$("input"); // Find all input fields
  for (const input of inputFields) {
    const randomValue = generateRandomValue(); // Generate a random value
    await input.type(randomValue, { delay: 100 });
  }

  // Check all checkboxes
  const checkboxes = await page.$$("input[type='checkbox']");
  for (const checkbox of checkboxes) {
    await checkbox.click();
  }

  // Select random radio buttons
  const radioButtons = await page.$$("input[type='radio']");
  const randomRadioButton =
    radioButtons[Math.floor(Math.random() * radioButtons.length)];
  await randomRadioButton.click();

  // Select a random option from dropdowns
  const selectDropdowns = await page.$$("select");
  for (const dropdown of selectDropdowns) {
    const options = await dropdown.$$eval("option", (options) =>
      options.map((option) => option.value)
    );
    const randomOption = options[Math.floor(Math.random() * options.length)];
    await dropdown.select(randomOption);
  }

  // Type random text into textareas
  const textareas = await page.$$("textarea");
  for (const textarea of textareas) {
    const randomText = generateRandomValue(); // Generate a random value
    await textarea.type(randomText, { delay: 50 });
  }

  // Attach a random file to file inputs
  //   const fileInputs = await page.$$("input[type='file']");
  //   for (const fileInput of fileInputs) {
  //     await fileInput.uploadFile("./files/file.pdf");
  //   }

  const currentPath = "./files/file.pdf";
  const newPath = "./uploads/file.pdf";

  rename(currentPath, newPath, (err) => {
    if (err) throw err;
    console.log("File moved successfully");
  });
  // Now, in your Puppeteer script, refer to the file in its new location
  // Attach a local file to the file input with ID "file-upload"
  const fileInput = await page.$("#photo");
  await fileInput.uploadFile(newPath); // Use the new path after moving the file

  // Type a random date into date inputs
  const dateInputs = await page.$$("input[type='date']");
  for (const dateInput of dateInputs) {
    const randomDate = generateRandomDate(); // Generate a random date
    await dateInput.type(randomDate);
  }

  // Wait for the "Submit" button to be present and become clickable
  await page.waitForSelector("button[type='submit']");

  // Simulate a click on the "Submit" button and log the event
  await page.evaluate(() => {
    const submitButton = document.querySelector("button[type='submit']");
    submitButton.addEventListener("click", () => {
      alert("Click event occurred!");
    });
    submitButton.click();
  });

  // Take a screenshot after the click
  await page.screenshot({
    path: "./screens/samplechapters1.jpg",
    fullPage: true,
  });

  // Close the browser
  // await browser.close();
})();

function generateRandomValue() {
  return Math.random().toString(36).substring(2); // Generate a random alphanumeric string
}

function generateRandomDate() {
  const start = new Date(1970, 0, 1);
  const end = new Date();
  return new Date(
    start.getTime() + Math.random() * (end.getTime() - start.getTime())
  )
    .toISOString()
    .split("T")[0];
}
