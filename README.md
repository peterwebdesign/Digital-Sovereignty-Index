# Digital Sovereignty Index
The Digital Sovereignty Index (DSI) aims to provide a comparative snapshot of visible, self-hosted infrastructure across borders. It doesn’t measure intent or regulation – it shows which tools are actually in use. 

![DSI_featured_image](https://github.com/user-attachments/assets/61646e45-6b49-4829-b559-29141f29d1ea)

## How do we calculate the Digital Sovereignty Index?
We use data from the internet scanner Shodan.io, a search engine for publicly accessible servers. For each of the selected applications, we count the number of IP addresses per country that visibly run the software (based on html signatures and metadata). We then:

* Adjust for population size, calculating server count per 100,000 inhabitants.
* Normalize values across countries and tools, so each tool has equal weight in the index
* Average the normalized scores across all products to get one overall score per country

* Group tools into categories (e.g. file storage, communication) to show strengths and weaknesses per area
