<div class="container">
    <div class="row">
        <div class="home-page-splash">
            <h1 id="home-page-motto">Research and Discover</h1>
            <!-- WMS Search Bar Begins -->
            <!-- WMS Styles moved to 'wmsStyles.css' and JavaScript moved to 'wmsJS.js' to condense space -->
            <div id="discovery-search-box" style="margin: 1em 0px 2em;">
                <link rel="stylesheet" type="text/css" href="wmsStyles.css">
                <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
                    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                <div style="display: flex; font-size: 1.1em; box-sizing: border-box; text-align: center;"><span
                        class="material-tab active-tab"
                        data-facets="[{&quot;key&quot;:&quot;format&quot;,&quot;value&quot;:&quot;all&quot;}]"
                        tabindex="0">Everything</span><span class="material-tab"
                        data-facets="[{&quot;key&quot;:&quot;format&quot;,&quot;value&quot;:&quot;Book&quot;}]"
                        tabindex="0">Books</span><span class="material-tab"
                        data-facets="[{&quot;key&quot;:&quot;subformat&quot;,&quot;value&quot;:&quot;Jrnl::jrnl_digital&quot;},{&quot;key&quot;:&quot;subformat&quot;,&quot;value&quot;:&quot;Jrnl::jrnl_other&quot;}]"
                        tabindex="0">Journals</span><span class="material-tab"
                        data-facets="[{&quot;key&quot;:&quot;subformat&quot;,&quot;value&quot;:&quot;Artchap::artchap_artcl&quot;}]"
                        tabindex="0">Articles</span><span class="material-tab"
                        data-facets="[{&quot;key&quot;:&quot;format&quot;,&quot;value&quot;:&quot;Video&quot;}]"
                        tabindex="0">Video</span></div>
                <form id="discovery-search-form"><label for="discovery-search"
                        style="display: inline-block; font-size: 1.3em; font-weight: normal; margin-bottom: 0.5em;">Research and
                        Discover</label>
                    <div style="display: flex; width: 100%;">
                        <div style="display: flex; flex-grow: 1;">
                            <div id="discovery-index-container"><select id="discovery-search-select">
                                    <option value="kw" selected="">Keyword</option>
                                    <option value="au">Author</option>
                                    <option value="su">Subject</option>
                                    <option value="ti">Title</option>
                                </select></div><input type="text" id="discovery-search" required="" autocomplete="off"
                                style="display: inline-block; width: 100%; height: 3em; font-size: 1em; padding: 0px 0.5em; margin-bottom: 0.5em; color: black; background-color: white; border: 1px solid rgb(204, 204, 204); box-shadow: none;">
                        </div>
                        <div><input type="submit" value="Search"
                                style="padding: 0.75em 1.5em; font-size: 1em; width: auto; height: 3em; min-width: 8em; color: rgb(255, 255, 255); background-color: rgb(185, 1, 36); margin: 0px 0px 0px 0.5em; border-radius: 0.25em; border: none; background-image: none; float: none; text-align: center;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <p style="flex-basis: 50%; flex-grow: 1; font-size: 1.1em;">What are you looking for?</p>
                        <p style="flex-basis: 100%; font-size: 0.9em; text-align: right;"><a id="discovery-advanced-search"
                                href="https://bardcollege.on.worldcat.org/advancedsearch" target="_blank"
                                style="text-decoration: underline; color: rgb(51, 51, 51);">Advanced Search</a></p>
                    </div>
                </form>
                <script src="wmsJS.js" type="text/javascript"></script>
            </div>
            <!-- WMS Search Bar Ends -->
        </div>
    </div>
</div>
