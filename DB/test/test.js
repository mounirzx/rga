import puppeteer from "puppeteer";

const searchTermCLI = process.argv.length >= 3 ? process.argv[2] : "Volbeat"; // Example search term

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

  // Navigating to YouTube
  await page.goto("https://www.youtube.com/");
  await page.waitForSelector("#search-input #search");
  await page.type("#search-input #search", searchTermCLI, { delay: 100 });

  // Taking a screenshot with blurred vision for accessibility testing
  await page.emulateVisionDeficiency("blurredVision");
  await page.screenshot({ path: "./screens/youtube-home-blurred.jpg" });
  await page.emulateVisionDeficiency("none"); // Reset to normal vision
  await page.screenshot({ path: "./screens/youtube-home.jpg" });

  // Completing and submitting the search form
  await Promise.all([
    page.waitForNavigation(),
    page.click("#search-icon-legacy"), // Clicking the search button
  ]);

  // More actions follow...

  await browser.close();
})();
