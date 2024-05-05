import { exec } from 'child_process';


let count = 0;
const limit = 10; // Change this to set the limit

// Function to execute questionnaireTest.js
function executequestionnaireTest() {
    if (count >= limit) {
        console.log(`Limit of ${limit} executions reached. Exiting...`);
        return;
    }
    exec('node questionnaireTest.js', (error, stdout, stderr) => {
        if (error) {
            console.error(`Error executing questionnaireTest.js: ${error}`);
            return;
        }
        console.log(stdout);
        count++;
        console.log(`Total executions: ${count}`);
        // Call executequestionnaireTest again to execute questionnaireTest.js continuously
        executequestionnaireTest();
    });
}

// Start executing questionnaireTest.js continuously
executequestionnaireTest();
