            <div title="Home View" id="home">   
                <div><img src="/images/logo-128-noborder.png" class="vertical" /><span class="heading">Welcome to AGSatTrack - Online</span></div>
                
                <h2>Basic Concepts</h2>
                <p><strong>Your Location.</strong> When first started the browser will ask you if the site is allowed to use your location. if you answer yes then the browser will attempt to determine your approximate location. <strong>note</strong> this is not generally that accurate. Under options->observer you can select your exact location.</p>
                <p><strong>Satellites</strong> are loaded from groups, these match the standard groups available on sites like celestrak. A default group is loaded at startup, unless you have changed this the 'amateur' group is loaded. To load a group select the 'Groups' dropdown from the Home ribbon menu. You can also specify the default group to load in the options, under satellites.</p>
                <p>Once a group is loaded you need to add satellites to display. When a satellite is displayed its data is calculated. Those satellites not being displayed will not have any data calculated for them. By default all satellites in the loaded group are automatically added. You can disable this in Options->satellites.</p>
                <p>Satellites can be 'selected', this can be done from the list viewe, Satellite Selector or generally by clicking on a satellite in any view. Once a satellite is selected more data will be displayed, generally its orbit and passes. The Satellite info pannel on the left will also show more information. If multiple satellites are selected then a drop down will appear allowing you to select the satellite to show more detailed information for.</p>
                <h2>Views</h2>
                <p>There are 7 main views available.</p>
                <ul>
                    <li><strong>List View.</strong> This is a basic list of all satellites loaded and is updated to reflect current data. For large groups of satellites the list is paged. The page size can be set at the botom of the view.</li>
                    <li><strong>3D View.</strong> This is a rotatable, zoomable view of the earth. satellites will be displayed, along with their orbits of there are selected. if the current orbit has a pass over your location this will be shown in green on the orbit path. The imagry for the earth can be selected in the 'provider' drop down. You can follow a selected satellite either from your location or from the satellite. The 'View' option also allows for a 2D and 2.5D view.</li>
                    <li><strong>Passes View.</strong> This view displays pass information for a satellite. The satellite and pass can be selected in the ribbon menu. The two bottom views can be selected in the ribbon menu. the default for these two views can be specified in the options.</li>
                    <li><strong>Polar View.</strong> This displays a Polar, or radar, view.</li>
                    <li><strong>Sky View.</strong> This displays a view looking South from your location. This can be handy for visual satellite observation. The horizon image can be dragged up and down if its in the way or turned off in the ribbon menu.</li>
                    <li><strong>Timeline View.</strong> This will show all passes for the selectedd satellites within the next 24 hours.</li>
                    <li><strong>Az/El View.</strong> This is <strong>only</strong> available in the passes view. It shows a graph of Azimuth and elevation for a selected pass.</li>
                </ul>
                <h4>Debug View</h4>
                <p>This must be enabled in the options. This view is primarily intended to debug issues. It shows all of the available satellites along with information about the internal calculation engine.</p>
            </div>
