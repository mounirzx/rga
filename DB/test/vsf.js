import puppeteer from "puppeteer";
import fs from "fs";
import path from "path";
import { fileURLToPath } from "url";


// Correctly obtain __filename and __dirname
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Specify the folder and file name
const folderName = "files";
const fileName = "test.jpg";
const filePath = path.join(__dirname, folderName, fileName);
const content = "This is the content of my file.";
const delay = 50;

// Function to wait for a specified number of milliseconds
const waitFor = (centiseconds) => {
  const milliseconds = centiseconds * 10; // Convert centiseconds to milliseconds
  return new Promise(resolve => setTimeout(resolve, milliseconds));
};

// Create the file with some content
fs.writeFile(filePath, content, (err) => {
  if (err) {
    console.error("Error creating the file:", err.message);
    return;
  }
  console.log(
    `File '${fileName}' has been created in the folder '${folderName}'.`
  );
});
// ############################################# Browser part #############################################

(async () => {
  const browser = await puppeteer.launch({
    headless: false, // Launch in headful mode
    executablePath:
    
    "C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe",
      // "C:\\Program Files\\Mozilla Firefox\\firefox.exe", // Use Mozilla 
      // "C:\\Program Files\\LibreWolf\\librewolf.exe", // Use LibreWolf 
    //   args: ['--start-maximized'] 
  });


  const page = await browser.newPage();
// ############################################# END Browser part #############################################

// ############################################# Monitors size #############################################

 // for 24pouce monitors 
  // await page.setViewport({
  //   width: 1900,
  //   height: 920,
  //   deviceScaleFactor: 1,
  // });




 // for 20 pouce monitors 
//  await page.setViewport({
//   width: 1580,
//   height: 720,
//   deviceScaleFactor: 1,
// });

//############################################# End monitor size #############################################


await page.goto("https://form.jotform.com/211533130885350?language=fr" , { delay: delay });



await page.select("#input_31", "Algeria");
await page.select("#input_33", "Algeria - Algiers");
await page.click('#label_input_12_1');
await page.type('#first_4', "Abes" , { delay: delay });
await page.type('#last_4', "Mounir" , { delay: delay });
await page.type('#input_5', "mounir2013b@gmail.com" , { delay: delay });
await page.type('#input_34', "067755445566" , { delay: delay });
await page.type('#lite_mode_23', "15052024" , { delay: delay });
await page.select("#input_47", "Tourism");
await page.type("#input_32", "30");
await page.click('#label_input_35_1');




const checkbox = document.querySelector('input[type="checkbox"][name="checkbox"][aria-required="true"]');
if (checkbox) checkbox.click();




//   await page.waitForSelector("#submitDatee");

//   // Click on the "Submit Date" button
//   await page.click("#submitDate");

  // Take a screenshot after clicking the button
  // await page.screenshot({
  //   path: "./screens/samplechapters1.jpg", // You can change the file name and path as per your preference.
  //   fullPage: true,
  // });

  // Close the browser
  // await browser.close();
})();
