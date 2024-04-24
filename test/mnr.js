import puppeteer from "puppeteer";
import fs from "fs";
import path from "path";
import { fileURLToPath } from "url";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const folderName = "files";
const fileName = "test.jpg";
const filePath = path.join(__dirname, folderName, fileName);
const content = "This is the content of my file.";
const delay = 100;

const waitFor = (centiseconds) => {
  const milliseconds = centiseconds * 10;
  return new Promise((resolve) => setTimeout(resolve, milliseconds));
};

const createFile = () => {
  fs.writeFile(filePath, content, (err) => {
    if (err) {
      console.error("Error creating the file:", err.message);
      return;
    }
    console.log(`File '${fileName}' has been created in the folder '${folderName}'.`);
  });
};

const clickAndWaitForSelector = async (page, selector) => {
  await page.click(selector);
  await waitFor(delay);
};

const selectOptionAndWaitForSelector = async (page, selector, value) => {
  await page.select(selector, value);
  await waitFor(delay);
};

const typeAndWaitForSelector = async (page, selector, text) => {
  await page.type(selector, text, { delay: delay });
};

(async () => {
  createFile();

  const browser = await puppeteer.launch({
    headless: false,
    executablePath: "C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe",
    args: ['--start-maximized']
  });

  const page = await browser.newPage();
  await page.setViewport({ width: 1580, height: 720, deviceScaleFactor: 1 });

  await page.goto("http://localhost/rga/", { delay: delay });

  await typeAndWaitForSelector(page, "#username", "mounir");
  await typeAndWaitForSelector(page, "#password", "mounir");
  await clickAndWaitForSelector(page, "#login");

  await typeAndWaitForSelector(page, 'input[name="nom_exploitant"]', "Mounir");
  await typeAndWaitForSelector(page, 'input[name="prenom_exploitant"]', "Abes");
  await typeAndWaitForSelector(page, "#jour_de_naissance", "08");
  await typeAndWaitForSelector(page, "#mois_de_naissance", "09");
  await typeAndWaitForSelector(page, "#annee_de_naissance", "1998");

  await clickAndWaitForSelector(page, 'select[name="sexe_exploitant"]');
  await selectOptionAndWaitForSelector(page, 'select[name="sexe_exploitant"]', "1");

  // Continue with your actions...

})();
