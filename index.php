<?php
include("header.php"); 
?>


<section class="" id="">
	<div id='map'></div>
</section>



<section class="py-5" id="">
  <div class="container">

    <div class="logo-separator">
    <img src="assets/images/DSI_favicon.svg" class="" alt="">
    </div>
    
    <h1 class="text-center mb-4">Digital Sovereignty Index</h1>
    
    <div class="row text-center mb-3">
      <div class="col-md-2"></div>
        <div class="col-md-8">
            <h5 class="notBold">
              Whether it’s about protecting sensitive data, avoiding vendor lock-in or ensuring democratic control over infrastructure, the debate around digital sovereignty is gaining momentum. 
              But how sovereign is a country’s digital infrastructure in practice?
            </h5>
            
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</section>


<section class="linear-gradient-half bg-light py-3" id="">
  <div class="container">
     <div class="row align-items-center my-4">

        <div class="col-md-6 text-white position-relative px-5 py-sm-5">
            
            <img class="mb-5" src="assets/images/DSI_logo_white.svg" style="max-width: 80%;" alt="Digital Sovereignty Index logo white">

            <h2 class="notBold subheading mb-5">
            <b>The Digital Sovereignty Index (DSI)</b> aims to provide a comparative snapshot of visible, self-hosted infrastructure across borders. It doesn’t measure intent or regulation – it shows which tools are actually in use.
            </h2>

            <p>
              The DSI score represents the relative number of deployments of self-hosted productivity & collaboration tools per 100K citizens, compared to other countries.
            </p>

        </div>

        <div class="col-md-6 px-5 position-relative bg-light">

              <h5 class="my-4">The principle is straightforward:</h5>

              <div class="sep"></div>

              <p class="my-4">
                We selected 50 of the most relevant self-hosted tools for digital collaboration and communication. These include platforms for file sharing, video conferencing, mail, notes, project management, and more. 
              </p>
              <div class="sep"></div>

              <p class="my-4">
                We then measured their real-world usage by counting the number of identifiable server instances per country.
              </p>

              <div class="sep"></div>

              <p class="my-4">
                The result is an index score per country. It’s not an absolute measurement of sovereignty, but it offers a strong signal: where citizens and organizations store their data on their own servers rather than rely on a few monopolized services, digital autonomy is more than just a political aspiration.
              </p>

        </div>

    </div>
</div>
</section>


<section class="py-5" id="">
  <div class="container">

    <div class="row text-center mb-4">
    <div class="col-md-12">
        <h2>
          What is the Digital Sovereignty Index tracker?
        </h2>
    </div>

    </div>
    <div class="row text-center">

      <div class="col-md-4">
          <i class="fas fa-check-circle fa-2x mb-3 gradient-icon"></i>
          <h5>What is it?</h5>
          <p>The DSI is a simple metric to illustrate how much locally hosted applications are used across the measured countries. It represents the relative amount of deployments of self-hosted productivity & collaboration tools per 100K citizens, compared to other countries.</p>
      </div>

      <div class="col-md-4">
          <i class="fas fa-check-circle fa-2x mb-3 gradient-icon"></i>
          <h5>What does it include?</h5>
          <p>It includes tools for file sharing, communication, project management, mail and collaboration. Based on server-level data, it highlights where sovereign alternatives are gaining ground – and where they remain marginal.</p>
      </div>

      <div class="col-md-4">
          <i class="fas fa-check-circle fa-2x mb-3 gradient-icon"></i>
          <h5>What does it give?</h5>
          <p>Each country receives a DSI score between 0 and 100. The higher the score, the more visible deployments of sovereign infrastructure we observed in that country, compared to the other countries we track.</p>
      </div>

    </div>

    </div>
  </div>
</section>



<!-- How It Works Section -->
<section class="py-5 bg-light" id="how-it-works">
  <div class="container">
    <h2 class="text-center mb-4">How do we calculate the Digital Sovereignty Index?</h2>

    <div class="row text-center">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <p>
            We use data from the internet scanner <a href="http://shodan.io/" target="_blank" class="">Shodan.io</a>, a search engine for publicly accessible servers. For each of the selected applications, we count the number of IP addresses per country that visibly run the software (based on html signatures and metadata). 
            We then:
          </p>
        </div>
        <div class="col-md-2"></div>
    </div>


    <div class="row text-center my-5">
      <div class="col-md-3">
          <i class="fas fa-server fa-3x mb-3 gradient-icon"></i>
          <h5>Calculating server count</h5>
          <p>Adjust for population size, calculating server count per 100,000 inhabitants.</p>
      </div>

      <div class="col-md-3">
          <i class="fas fa-chart-line fa-3x mb-3 gradient-icon"></i>
          <h5>Normalize values</h5>
          <p>Normalize values across countries and tools, so each tool has equal weight in the index</p>
      </div>

      <div class="col-md-3">
          <i class="fas fa-globe-europe fa-3x mb-3 gradient-icon"></i>
          <h5>Get the score</h5>
          <p>Average the normalized scores across all products to get one overall score per country</p>
      </div>

      <div class="col-md-3">
          <i class="fas fa-layer-group fa-3x mb-3 gradient-icon"></i>
          <h5>Group tools</h5>
          <p>Group tools into categories (e.g. file storage, communication) to show strengths and weaknesses per area</p>
      </div>
    </div>

    <div class="row">
      <div class="row text-center">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <p>
              The result is a transparent, replicable index that reflects the observable, relative number of deployments of self-hosted applications in each country.
            </p>


            <div class="alert alert-warning dsi-alert d-flex align-items-center" role="alert">
              <div>
              Here is an example search which shows you the <a href="https://www.shodan.io/search?query=http.html%3Abigbluebutton" target="_blank">number of servers for Big Blue Button</a> - a free account is needed to run this query. You will see almost 11.000 servers on the web, and you can check out some of the IP's to see that they do indeed run Big Blue Button. We got our population data from <a href="https://www.census.gov/" target="_blank">census.gov</a>.
            
              </div>
            </div>

            
          </div>
          <div class="col-md-2"></div>
      </div>
    </div>

  </div>
</section>

<!-- Key Benefits Section -->
<section class="py-5">
  <div class="container">
    <div class="row ">
      <div class="col-md-12">
                <h2 class="mb-4 text-center">
                  Limitations and caveats of the Digital Sovereignty Index
                </h2>
      <p class="text-center">The DSI is not a perfect measurement – it’s a directional signal, not a definitive map. Several caveats apply:</p>
   
      <ul class="caveats-list">
        <li class="list-group-item"><b>🏛️ Server visibility is limited:</b> Deployments behind proxies, firewalls or private networks are not counted. Some tools are harder to detect reliably than others.</li>
        <li class="list-group-item"><b>🌐 Toolset is not exhaustive:</b> We include widely used self-hosted services, but certainly we missed some! Suggestions for additional tools that are trackable in Shodan and return a significant number of results are welcome.</li>
        <li class="list-group-item"><b>🛡️ Location ≠ ownership:</b> A server’s IP may be in one country, while its users or data reside elsewhere. If a country outsources hosting, its index score may fall, while a country that hosts data from other countries sees its index rise – regardless of control or access.</li>
        <li class="list-group-item"><b>📊 Volume ≠ usage:</b> A visible server doesn’t mean millions of users. The DSI shows infrastructure presence, not usage intensity, amount of data stored or use in public sector and business.</li>
      </ul>

      <p class="text-center">We see the DSI as a starting point. With each iteration, it can become more robust – and more useful for policymakers, researchers and the open-source community. Your input is welcome!</p>
      </div>
      </div>
    
  </div>
</section>

<?php include("cta.php"); ?>


<!-- FAQ Section -->
<section class="py-5 bg-light">
  <div class="container">

  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <h2 class="mb-4 text-center">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion" itemscope itemtype="https://schema.org/FAQPage">
      
      <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="accordion-header" id="faq1">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
            What is Digital Sovereignty?
          </button>
        </h3>
        <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div itemprop="text">
                Digital Sovereignty refers to a country's ability to control and govern its own digital infrastructure and data. Discover how <a href="https://nextcloud.com/blog/nextcloud-hub10/" target="_blank">open source solutions like Nextcloud</a> protect digital sovereignty.
            </div>
          </div>
        </div>
      </div>

      <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="accordion-header" id="faq2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
            How is the index score calculated?
          </button>
        </h3>
        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">

            <div itemprop="text">The score is a representation of the number of self-hosted productivity tools as well as a number of hosting management tools that are deployed in a country, per 100K citizens, relative to other countries. We count each product and normalize the values so the country with the largest number of deployments per 100K citizens has a score of 1, and the country with the lowest a score of 0. Then we average over all products and multiply by 100 to get a total DSI, a score between 0 and 100. We do the same for the sub-indexes. So if Finland has the highest number of Big Blue Button servers per citizen, and the same goes for Jitsi, Mumble and the other communication tools we track, its score in this category would be (6\*1)\*100=100. However, Singapore has more Rocket.chat deployments relative to its population, so Finland's score comes out short of the maximum: almost 97! Germany is second place with a score of about 60, and Singapore follows with a little over 50. Find a table with data and formulas <a href="https://cloud.nextcloud.com/index.php/f/11350140" target="_blank">here</a> (note that the numbers might be slightly different from the website as the data there is more up to date).

            See <a href="#how-it-works">#how-it-works</a></div>
            
          </div>
        </div>
      </div>
      <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="accordion-header" id="faq3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
            Can I contribute to the project?
          </button>
        </h3>
        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div itemprop="text">Yes! All our data and code are self hosted and available on <a href="https://github.com/nextcloud" target="_blank">GitHub</a>. Pull requests and issues are welcome.</div>
            
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="col-md-2"></div>
  </div>

  </div>
</section>
<script type="text/javascript" src="data/statesData.js"></script>
<script type="text/javascript">

//format population number
function formatNumberShort(num) {
  if (num >= 1_000_000) {
    const truncated = Math.floor(num / 100_000) / 10;
    return (truncated % 1 === 0 ? truncated.toFixed(0) : truncated.toFixed(1)) + 'M';
  } else if (num >= 1_000) {
    const truncated = Math.floor(num / 100) / 10;
    return (truncated % 1 === 0 ? truncated.toFixed(0) : truncated.toFixed(1)) + 'K';
  } else {
    return num.toString();
  }
}

//normalize population number
function normalize_pop_number(num){
   return num/100000;
}


//get total number of servers per product
function getTotalServers(obj){
  var Products = obj;
  let sum = 0;
  if(Products) {
        Object.keys(Products).forEach( item => {
          if(!isNaN(Products[item][0])) {
            sum += Products[item][0];
          }
        });
  }
  return sum;
}

//add thousands separator
function formatNumber(n) {
  return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

//get normalized value of number of servers
function getNormalizedValue(obj) {
  var Products = obj;
  var normalized, num_servers, min, max;
    if(Products) {
          Object.keys(Products).forEach( item => {
            num_servers = Products[item][0];
            min = Products[item][1];
            max = Products[item][2];

            if(min == max){
              normalized = 0;
            } else {
              normalized = (num_servers - min) / (max - min);
            }

          });
    }
    return normalized;
}


//get the sum of the normalized values, for each product 
function getSumNormalized(obj) {
  var Products = obj;
  var sum = 0;
  if(Products) {
          Object.keys(Products).forEach( item => {
            sum += Products[item][5];
          });
  }
  return sum;
}


//get DSI score for a specific country, whose properties are inside props variable
function getDsiScore(props) {
  var score_raw = 0;
  let score = 0;
  let country = props.iso_a2_eh;
  
  if (props) {
    let products = props.Products;
    let totalServers = getTotalServers(props.Products);
    let oss_density_per_thousands = (totalServers/props.pop_est)*1000;
    let sumNormalized = getSumNormalized(products); //this is wrong
    score_raw = sumNormalized / Object.keys(products).length;
    score = score_raw * 100;
  }

  return score.toFixed(2);
}


fetch('data/shodan.csv')
  .then(response => response.text())
  .then(csvText => {
    const lines = csvText.trim().split('\n').filter(line => line.trim() !== '');
    const headers = lines[0].split(';').filter(Boolean); // ["Product", "Global", "DE", "US", "FR"]
    const headers_trimmed = headers.map(h => h.trim()); // remove any line breaks etc. 
    const countryCodes = headers_trimmed.slice(2); // ["DE", "US", "FR"]
    const allCountryCodes = new Set(countryCodes);

    // Initialize all countries with empty Products and random score
    statesData.features.forEach(feature => {
      feature.properties.Products = {};
    });

    // Process each product line and add Products to the statesData.js as separate object variable
    for (let i = 1; i < lines.length; i++) {
      const values = lines[i].split(';');
      const productName = values[0];
      let normalized;
      
      // Get values for this product across all country codes (skip Product and Global)
      const countryValues = countryCodes.map((code, index) =>
        parseInt(values[index + 2], 10)
      ).filter(v => !isNaN(v));

      // Calculate min and max once for this product
      const min = Math.min(...countryValues);
      const max = Math.max(...countryValues);


      for (let j = 0; j < countryCodes.length; j++) {
        const countryCode = countryCodes[j];
        const value = parseInt(values[j + 2], 10); // skip Product and Global columns 

        const match = statesData.features.find(
            f => f.properties.iso_a2_eh === countryCode
        );

        if(min == max){
          normalized = 0;
        } else {
          normalized = (value - min) / (max - min);
          var rounded_normalized = Number(normalized.toFixed(2));
        }

        if (match && !isNaN(value)) {
          if (!match.properties.Products) {
            match.properties.Products = {};
          }
          
          var country_pop_in_100k = normalize_pop_number(match.properties.pop_est);
          var servers_per_normalized_pop = value/country_pop_in_100k;
          var rounded_servers_per_normalized_pop = Number(servers_per_normalized_pop.toFixed(8));
          match.properties.Products[productName] = [value, rounded_servers_per_normalized_pop, country_pop_in_100k];
        }

      }
    }


    //foreach country
    const minMaxPerProduct = {}; // Final result
    statesData.features.forEach(feature => {
      var products = feature.properties.Products;
      if(products) {

          Object.keys(products).forEach( productName => {
            var servers_per_normalized_pop = products[productName][1];
   
            if (!isNaN(servers_per_normalized_pop)) {
              if (!minMaxPerProduct[productName]) {
                minMaxPerProduct[productName] = {
                  min: servers_per_normalized_pop,
                  max: servers_per_normalized_pop
                };
              } else {
                if (servers_per_normalized_pop < minMaxPerProduct[productName].min) {
                  minMaxPerProduct[productName].min = servers_per_normalized_pop;
                }
                if (servers_per_normalized_pop > minMaxPerProduct[productName].max) {
                  minMaxPerProduct[productName].max = servers_per_normalized_pop;
                }
              }
            }
            
          });
      }
    });
    

statesData.features.forEach(feature => {
      var products = feature.properties.Products;
      if(products) {
          Object.keys(products).forEach( productName => {
              var min = minMaxPerProduct[productName].min;
              var max = minMaxPerProduct[productName].max;

              products[productName][3] = min; // add min
              products[productName][4] = max; // add max

              var normalized_formula = 0;
              if(max == min) {
                normalized_formula = 0;
              } else {
                normalized_formula = (products[productName][1] - min) / (max - min);
              }
              
              var rounded_normalized_formula = Number(normalized_formula.toFixed(15));
              products[productName][5] = rounded_normalized_formula;

          });
      }
});

  const selectedCountries = new Set();
  const map = L.map('map').setView([57.797944, -23.155921], 3);
  map.createPane('labels');

  function addTilesToMap(){
      const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 16,
        attribution: '&copy; <a target="_blank" href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
      }).addTo(map);
  }

  const cookieChoice = getCookie('cookie_banner_accepted');
  if (cookieChoice === 'all') {
    addTilesToMap();
  }

  document.getElementById('accept-all').addEventListener('click', (e) => {
    e.preventDefault();
    addTilesToMap();
  });


	// control that shows state info on hover
	const info = L.control();

	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	info.update = function (props) {
    let contents = '';
    if(props) {
      console.log(props);

      if(getTotalServers(props.Products) > 0) {
          contents = `<div class="dsi_score">
          <h5 class="country_name">${props.name}</h5>
          <span class="formal_en">${props.formal_en}</span>
          <span class="score">${getDsiScore(props)}</span></div>
          <ul class="country_infos">
          <li><i class="fas fa-server"></i><b>Servers number:</b> ${formatNumber(getTotalServers(props.Products))}</li>
          <li><i class="fas fa-users"></i><b>Population:</b> ${formatNumberShort(props.pop_est)}</li>
          </ul>`;
      } else {
        contents = `<div class="no_data">No data available for ${props.name}.</div>`;
      }
    }

		this._div.innerHTML = `<h2 class="title">Digital Sovereignty Index score</h2><span class="sub_heading">Click on a country to see its digital sovereignty score</span>${contents}`;
	};

	info.addTo(map);

	// get color depending on population density value
	function getColor(d) {

		return d > 90 ? '#006e4d' :      // Dartmouth green
			d > 80 ? '#289b6a' :      // Shamrock green
			d > 70 ? '#31bb76' :      // Emerald
			d > 60 ? '#8ede92' :      // Light Green
			d > 50 ? '#c8f0a3' :      // Tea green
			d > 40 ? '#fff691' :      // Maize
			d > 30 ? '#ffc23e' :      // Amber
			d > 20 ? '#ff882e' :      // Orange wheel
			d > 10 ? '#ff5e00' :      // Orange pantone
						'#e7000c';      // Red (worst score)
	}

	function style(feature) {
    let score = getDsiScore(feature.properties);
    let fill_color = '';
    if (score > 1) {
      fill_color = getColor(score);
    }
  
		return {
			weight: 1,
			opacity: 1,
			color: '#fff',
			dashArray: '2',
			fillOpacity: 0.5,
      fillColor: fill_color
		};
	}


	function showInfosSpanOnClick(e) {
		const layer = e.target;
    //reset 
    geojson.resetStyle();
    const countryId = layer.feature.properties.iso_a2_eh;
    //reset set 
    selectedCountries.clear();
    selectedCountries.add(countryId);

    layer.setStyle({
        weight: 3,
        color: '#000',
        dashArray: '',
        fillOpacity: 0.7
    });

		layer.bringToFront();
		info.update(layer.feature.properties);
	}


	function highlightFeature(e) {
		const layer = e.target;
    
    const countryId = e.target.feature.properties.iso_a2_eh; // or any unique property
    if (!selectedCountries.has(countryId)) {
        layer.setStyle({
          weight: 3,
          color: '#fff',
          dashArray: '',
          fillOpacity: 0.7
        });
    }
    
		layer.bringToFront();
	}

	/* global statesData */
	const geojson = L.geoJson(statesData, {
		style,
		onEachFeature
	}).addTo(map);


	function resetHighlightCountry(e) {
    var layer = e.target; 
    const countryId = e.target.feature.properties.iso_a2_eh; // or any unique property

    if (!selectedCountries.has(countryId)) {
      geojson.resetStyle(e.target);
    }
	}


	function zoomToFeature(e) {
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
      click: showInfosSpanOnClick,
			mouseout: resetHighlightCountry,
		});
	}

	map.attributionControl.addAttribution('Population data &copy; <a target="_blank" href="http://census.gov/">US Census Bureau</a>');


	const legend = L.control({position: 'bottomright'});

	legend.onAdd = function (map) {

		const div = L.DomUtil.create('div', 'info legend');
		const grades = [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
		const labels = [];
		let from, to;

		for (let i = 0; i < grades.length-1; i++) {
			from = grades[i];
			to = grades[i + 1];

			labels.push(`<i style="background:${getColor(from + 1)}"></i> ${from}${to ? `&ndash;${to}` : ''}`);
		}

		div.innerHTML = labels.join('<br>');
		return div;
	};

	legend.addTo(map);
  })
  .catch(err => console.error('Error loading CSV:', err));
</script>

<?php include("footer.php"); ?>