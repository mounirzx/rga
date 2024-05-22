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
const delay = 0;

// Function to wait for a specified number of milliseconds
const waitFor = (centiseconds) => {
  const milliseconds = centiseconds * 10; // Convert centiseconds to milliseconds
  return new Promise((resolve) => setTimeout(resolve, milliseconds));
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
    args: ["--start-maximized"],
  });

  const page = await browser.newPage();
  // ############################################# END Browser part #############################################

  // ############################################# Monitors size #############################################

  //  for 24pouce monitors

  await page.setViewport({
    width: 1900,
    height: 920,
    deviceScaleFactor: 1,
  });

  // for 20 pouce monitors
  //  await page.setViewport({
  //   width: 1580,
  //   height: 720,
  //   deviceScaleFactor: 1,
  // });

  //############################################# End monitor size #############################################

  //await page.goto("http://213.179.181.50/workingrga/", { delay: delay });
  await page.goto("http://localhost/rga", { delay: delay });

  await page.type("#username", "admin", { delay: delay });
  await page.type("#password", "admin", { delay: delay });
  await page.click("#login");

  // await page.waitForSelector("#day_of_passage");
  // await page.select("#day_of_passage", "12", { delay: 10 });
  // await page.waitForSelector("#month_of_passage");
  // await page.select("#month_of_passage", "10", { delay: 10 });

  // await page.waitForSelector("#year_of_passage");
  // await page.select("#year_of_passage", "2024", { delay: 10 });

  // Define a function to generate random numbers with a specific length
  function generateRandomNumber(length) {
    let result = "";
    for (let i = 0; i < length; i++) {
      result += Math.floor(Math.random() * 10); // Generates a random digit (0-9)
    }
    return result;
  }

  // //######################## II- Identification de l'exploitant تعريف المستثمر########################
  await page.waitForSelector('input[name="nom_exploitant"]');
  await page.type('input[name="nom_exploitant"]', "Mounir", { delay: delay });

  await page.waitForSelector('input[name="prenom_exploitant"]');
  await page.type('input[name="prenom_exploitant"]', "Abes", { delay: delay });

  // await page.waitForSelector("#jour_de_naissance");
  await page.type("#jour_de_naissance", "08", { delay: delay });

  // await page.waitForSelector("#mois_de_naissance");
  await page.type("#mois_de_naissance", "09", { delay: delay });

  // await page.waitForSelector("#mois_de_naissance");
  await page.type("#mois_de_naissance", "1998", { delay: delay });

  await page.type('input[name="nin_exploitant"]', generateRandomNumber(20), {
    delay: delay,
  });

  await page.type(
    'input[name="cultures_herbacees_1"]',
    generateRandomNumber(3),
    { delay: delay }
  );
  await page.type(
    'input[name="cultures_herbacees_2"]',
    generateRandomNumber(2),
    { delay: delay }
  );
  await page.type(
    'input[name="cultures_herbacees_3"]',
    generateRandomNumber(3),
    { delay: delay }
  );
  await page.type(
    'input[name="cultures_herbacees_4"]',
    generateRandomNumber(2),
    { delay: delay }
  );

  await page.type(
    'input[name="terres_au_repos_jacheres_1"]',
    generateRandomNumber(3),
    { delay: delay }
  );
  await page.type(
    'input[name="terres_au_repos_jacheres_2"]',
    generateRandomNumber(2),
    { delay: delay }
  );
  await page.type(
    'input[name="terres_au_repos_jacheres_3"]',
    generateRandomNumber(3),
    { delay: delay }
  );
  await page.type(
    'input[name="terres_au_repos_jacheres_4"]',
    generateRandomNumber(2),
    { delay: delay }
  );

  await page.type(
    'input[name="plantations_arboriculture_1"]',
    generateRandomNumber(3),
    { delay: delay }
  );
  await page.type(
    'input[name="plantations_arboriculture_2"]',
    generateRandomNumber(2),
    { delay: delay }
  );
  await page.type(
    'input[name="plantations_arboriculture_3"]',
    generateRandomNumber(3),
    { delay: delay }
  );
  await page.type(
    'input[name="plantations_arboriculture_4"]',
    generateRandomNumber(2),
    { delay: delay }
  );

  await page.type(
    'input[name="prairies_naturelles_1"]',
    generateRandomNumber(3),
    { delay: delay }
  );
  await page.type(
    'input[name="prairies_naturelles_2"]',
    generateRandomNumber(2),
    { delay: delay }
  );
  await page.type(
    'input[name="prairies_naturelles_3"]',
    generateRandomNumber(3),
    { delay: delay }
  );
  await page.type(
    'input[name="prairies_naturelles_4"]',
    generateRandomNumber(2),
    { delay: delay }
  );

  await page.type(
    'input[name="pacages_et_parcours_1"]',
    generateRandomNumber(3),
    { delay: delay }
  );
  await page.type(
    'input[name="pacages_et_parcours_2"]',
    generateRandomNumber(2),
    { delay: delay }
  );

  await page.type(
    'input[name="surfaces_improductives_1"]',
    generateRandomNumber(3),
    { delay: delay }
  );
  await page.type(
    'input[name="surfaces_improductives_2"]',
    generateRandomNumber(2),
    { delay: delay }
  );

  // Wait for the "Submit Date" button to be present and become clickable
  await page.waitForSelector("#submitDate");

  // Click on the "Submit Date" button
  await page.click("#submitDate");

  // Take a screenshot after clicking the button
  // await page.screenshot({
  //   path: "./screens/samplechapters1.jpg", // You can change the file name and path as per your preference.
  //   fullPage: true,
  // });

  // Close the browser
  await browser.close();
})();
