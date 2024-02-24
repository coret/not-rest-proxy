<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<title>NDE Termennetwerk als OpenAI plugin voor LLM's proof-of-concept</title>
	</head>
	<body style="padding:10px">
	  <h1>
		<a href="https://termennetwerk.netwerkdigitaalerfgoed.nl/"><img align="left" width="80" height="80" src="img/logo-nde.png" hspace="5" style="margin-bottom:40px"></a>
		<a href="https://www.openapis.org/"><img align="right" width="100" height="100" src="img/openapi.svg" hspace="20"></a>
		<strong>NDE Termennetwerk</strong><br>als OpenAPI plugin voor LLM's<br><span style="color:#0000f9;font-size:.8em">Proof of Concept</span>
	  </h1>

		<p><br><br></p>
		<div class="container">
			<h5>REST proxy op GraphQL interface van NDE Termennetwerk</h5>
			<form action="lookup.php" method="GET">
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="type">Entiteit type</label>
							<select class="form-control form-control-lg" name="type" id="type">
								<option value="GPE">GPE (landen, provincies, plaatsen) &raquo; Geonames/Wikidata</option>
								<option value="PERSON">PERSON (persoonsnamen) &raquo; RKDartists/NTA/Muziekschatten/Wikidata/B&G</option>
								<option value="DATE">DATE (datums) &raquo; AAT/RCE CHT</option>
								<option value="ORG">ORG (organisaties) &raquo; Wikidata</option>
								<option value="EVENT">EVENT (gebeurtenissen) &raquo; Wikidata</option>
								<option value="CONCEPT">CONCEPT (concepten) &raquo; AAT/RCE CHT</option>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="term">Op te zoeken term</label>
							<input type="search" id="term" name="term" class="form-control form-control-lg">
						</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Zoek via het NDE Termennetwerk</button>
			</form>

			<p><br><br></p>

			<div class="row">
				<div class="col">
					<h5>Bestanden</h5>
					<ul>
						<li><a href="img/demo.gif">Demo gebruik in ChatGPT</a> (animated GIF) op basis van <a href="chat.txt">chat</a> (TXT)</li>
						<li><a href="/openapi.yaml">OpenAPI definitie</a> van REST proxy op NDE Termennetwerk (YAML)</li>
						<li><a href="/.well-known/ai-plugin.json">AI-plugin definitie</a> (JSON)</li>
					</ul>
					<h5>Github</h5>
					<ul>
						<li><a href="https://github.com/EnnoMeijers/ner-not-pipeline">ner-not-pipeline</a>, Enno Meijers (2024)</li>
						<li><a href="https://github.com/vblagoje/openapi-rag-service">openapi-rag-service</a>, Vladimir Blagojevic (2024)
					</ul>
				</div>
				<div class="col">
					<h5>Artikels</h5>
					<ul>
						<li><a target="_new" href="https://blogbob.coret.org/2023/06/open-archieven-als-plugin-voor-chatgpt.html">Open Archieven als plugin voor ChatGPT</a>, Bob Coret (2023)</li>
						<li><a href="https://openai.com/blog/chatgpt-plugins">ChatGPT plugins</a></li>
						<li><a data-csl-entry-id="song2023restgpt" class="csl-entry" href="https://restgpt.github.io/">RestGPT: Connecting Large Language Models with Real-World RESTful APIs</a>, Song, Y., Xiong, W., Zhu, D., Wu, W., Qian, H., Song, M., Huang, H., Li, C., Wang, K., Yao, R., Tian, Y., &amp; Li, S. (2023)</li>
						<li><a href="https://python.langchain.com/docs/use_cases/apis">Interacting with APIs</a> colab, LangChain</li>
						<li><a href="https://sujit-udhane.medium.com/naturally-interact-with-your-apis-using-local-llm-30c903141d32">Naturally interact with your APIs using Local LLM</a>, Sujit Udhane (2023)
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>