import asyncio
from pyppeteer import launch

async def main():
    browser = await launch(headless=False, executablePath='C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe')
    page = await browser.newPage()
    await page.goto("https://form.jotform.com/211533130885350?language=fr")

    # Type your code to interact with the page here
    await page.select("#input_31", "Algeria")
    await page.select("#input_33", "Algeria - Algiers")
    await page.click('#label_input_12_1')
    await page.type('#first_4', "Abes")
    await page.type('#last_4', "Mounir")
    await page.type('#input_5', "mounir2013b@gmail.com")
    await page.type('#input_34', "067755445566")
    await page.type('#lite_mode_23', "15052024")
    await page.select("#input_47", "Tourism")
    await page.type("#input_32", "30")
    await page.click('#label_input_35_1')

    # Find and click all checkbox input elements on the page
    checkboxes = await page.querySelectorAll('input[type="checkbox"]')
    for checkbox in checkboxes:
        await checkbox.click()

    # Close the browser
    # await browser.close()

asyncio.get_event_loop().run_until_complete(main())
