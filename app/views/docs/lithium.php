    <div class="doc__bg"></div>
    <nav class="header">
      <h1 class="logo">Lithium <span class="logo__thin">Docs</span></h1>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        <li class="menu__item"><a href="/project/lithium" class="link link--dark"><i class="fa fa-home"></i> Project Page</a></li>
      </ul>
    </nav>
    <div class="wrapper">
      <aside class="doc__nav">
        <ul>
          <li class="js-btn selected">Get Started</li>
          <li class="js-btn">File structure</li>
          <br>
          <li class="ct-btn">── Features ──</li>
          <li class="js-btn">Configuration</li>
          <li class="js-btn">Routing</li>
          <li class="js-btn">Fetching views</li>
          <li class="js-btn">Fetching components</li>
          <li class="js-btn">HTTP</li>
          <br>
          <li class="ct-btn">── Utilities ──</li>
          <li class="js-btn">File</li>
          <li class="js-btn">String</li>
          <br>
          <li class="ct-btn">── Parsing ──</li>
          <li class="js-btn">XML Files</li>
          <li class="js-btn">INI Files</li>
        </ul>
      </aside>
      <article class="doc__content">
        <section>
          <h3 class="section__title">Dependencies</h3>
          <a href="https://www.php.net/downloads.php">PHP 8.1</a><br>
          <a href="https://getcomposer.org/">Composer</a>
        </section>
        <section>
          <h3 class="section__title">Notes</h3>
          <p>v1.2.0 will have PHPdocs. Sorry its not in the framework yet!</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Get Started</h3>
          <p>
            To get started first download the latest release from <a href="https://github.com/unifiedorg/lithium-php/releases">here</a>,
            and run this in the same directory you downloaded lithium in :
          </p>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                $ composer dump-autoload
              </code>
            </pre>
          </div>
        </section>
        <section class="js-section">
          <h3 class="section__title">File structure</h3>
          <p>
            Lithium has a extremly simple file structure. Your entire app is contained in the <code>/app/</code>
            directory. It is basically the only folder you will need to access while making your website!
          </p>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
              root/
              ├── app/
              │   ├── assets/
              │   ├──── ...
              │   ├── components/
              │   ├──── ...
              │   ├── config/
              │   ├──── app.php
              │   ├──── db.php
              │   ├── controllers/
              │   ├──── Api/
              │   ├────── ...
              │   ├──── ...
              │   ├── routes/
              │   ├──── web.php
              │   ├──── api.php
              │   ├── views/
              │   ├──── ...
              ├── lib/
              │   ├── ...
              └── public/
                  ├── .htaccess
                  └── index.php
              </code>
            </pre>
          </div>
        </section>
        <section class="js-section">
          <h3 class="section__title">Configuration</h3>
          <p>
            There are 2 config files in <code>/app/config/</code>. The first one is the <code>app.php</code> file, which
            contains information about the app you are building.
          </p>
          <table>
            <tr>
              <th>Options</th>
              <th>Value</th>
              <th>Default</th>
            </tr>
            <tr>
              <td>APP_NAME</td>
              <td>This should be set to the name of your app. You can then use <code>APP_NAME</code> in your project to get whatever you have set it to in the config.</td>
              <td>example-app</td>
            </tr>
            <tr>
              <td>APP_VERSION</td>
              <td>Version of your app.</td>
              <td>v1.0.0</td>
            </tr>
            <tr>
              <td>LITHIUM_VERSION</td>
              <td>This should <b>never</b> be changed. This is the version of lithium you are running.</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>APP_AUTHOR</td>
              <td>Your name/username. Or whoever the author of the app is.</td>
              <td>Unified</td>
            </tr>
            <tr>
              <td>APP_DESCRIPTION</td>
              <td>Description of your app or summary of what your app does.</td>
              <td>A basic app using Lithium.</td>
            </tr>
            <tr>
              <td>APP_ICON</td>
              <td>Link to the favicon that should be used when no favicon is defined when fetching a view.</td>
              <td>#</td>
            </tr>
          </table>
          <p>
            The second file is <code>db.php</code> which contains credentials to your SQL database.
            This is currently not used in any part of the framework. When a database abstraction layer
            is added in the next major version, this page will be updated to contain information about
            <code>db.php</code>.
          </p>
          <hr />
        </section>
        <section class="js-section">
          <h3 class="section__title">Routing</h3>
            <p>
              Properties :<br>
              <br>
              - <code>$routes</code>: An array to store route configurations.<br>
              - <code>$notFound</code>: A variable to store the handler for the "not found" route.<br>
              - <code>$controllerNamespace</code>: A string to store the namespace of the controller classes.</p>
          <table>
            <tr>
              <th>Options</th>
              <th>Value</th>
            </tr>
            <tr>
              <td><code>__construct()</code></td>
              <td>Constructor method that initializes the RouteHandler object. It sets the default controller namespace to \\App\\Controllers.</td>
            </tr>
            <tr>
              <td><code>setMVCCNamespace($dir)</code></td>
              <td>Sets the controller namespace to the provided directory. This method allows customization of the namespace for the MVC architecture.</td>
            </tr>
            <tr>
              <td><code>addRoute($method, $url, $handler)</code></td>
              <td>Adds a route configuration to the $routes array. It takes the HTTP method, URL pattern, and a handler function as parameters.</td>
            </tr>
            <tr>
              <td><code>addMVCRoute($method, $route, $handler)</code></td>
              <td>Adds an MVC route configuration to the $routes array. It is a specialized version of addRoute(). This method internally calls addRoute() with a modified handler function. The provided $handler is expected to be in the format "ControllerName@actionMethod", and it dynamically creates an instance of the specified controller class and calls the corresponding action method.</td>
            </tr>
            <tr>
              <td><code>setNotFound($handler)</code></td>
              <td>Sets the handler for the "not found" route. The provided $handler is a function that will be executed when no matching route is found.</td>
            </tr>
            <tr>
              <td><code>handle($method, $url)</code></td>
              <td>Handles the incoming request by matching the method and URL against the defined routes. If a matching route is found, the associated handler is executed. If no matching route is found, the "not found" handler is executed if set, or a default 404 Not Found response is sent.</td>
            </tr>
          </table>
          <p>
            Routes also support PHP regular expressions, RegEx,
            any RegEx gets matched to a variable that is than passed into a function.
            The amount of "variables" in the route should be the same amount of variables
            being passed into the function. <br><br>
            For example, the first RegEx will match the first variable, the second RegEx would
            match the second variable, and so on. Also, the variables being passed into the
            function do not need to named in a certain way. <br><br>
            The same logic applies to MVC routes too. Just the variables need to passed into the
            function inside the controller class.
          </p>
          <h3>Examples:</h3>
          <p>Routing (simple) :</p>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                // $router = new instance of the router (this part is in /public/index.php)
                $router = new \Unified\Lithium\Router\RouteHandler();

                // This part should go to /app/routes/web.php
                $router→addRoute('GET', '/', function () { echo "Hello world!"; } );

                // Handle the request (this part is in /public/index.php)
                $router = $_SERVER['REQUEST_METHOD'];
                $router = parse_url($_SERVER['REQUEST_URI', PHP_URL_PATH]);
                $router→handle($method, $url);
              </code>
            </pre>
          </div>

          <p>Routing (with RegEx) :</p>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                // $router = new instance of the router (this part is in /public/index.php)
                $router = new \Unified\Lithium\Router\RouteHandler();

                // This part should go to /app/routes/web.php
                // "(\w+)" matches any words
                // First RegEx = first variable being passed into the function
                $router→addRoute('GET', '/(\w+)', function ($name) { echo "Hello, $name!"; } );

                // "(\w+)" matches any words
                // "(\d+)" matches any digits
                // First RegEx = first variable being passed into the function
                $router→addRoute('GET', '/(\w+)/(\d+)', function ($name, $age) { echo "Hello, $name! You are $age years old!"; } );

                // Handle the request (this part is in /public/index.php)
                $router = $_SERVER['REQUEST_METHOD'];
                $router = parse_url($_SERVER['REQUEST_URI', PHP_URL_PATH]);
                $router→handle($method, $url);
              </code>
            </pre>
          </div>

          <p>Routing (MVC) :</p>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                // $router = new instance of the router (this part is in /public/index.php)
                $router = new \Unified\Lithium\Router\RouteHandler();

                // This part should go to /app/routes/web.php
                // "(\w+)" matches any words
                // First RegEx = first variable being passed into the function
                $router→addMVCRoute('GET', '/(\w+)', 'Example@hello' );

                // Handle the request (this part is in /public/index.php)
                $router = $_SERVER['REQUEST_METHOD'];
                $router = parse_url($_SERVER['REQUEST_URI', PHP_URL_PATH]);
                $router→handle($method, $url);

                //////////////////////////////////////////////////////////////////
                // File : /app/controllers/ExampleController.php
                //////////////////////////////////////////////////////////////////

                namespace App\Controllers;

                class ExampleController {
                  public function hello($name) {
                    echo "Hello $name!";
                  }
                }
              </code>
            </pre>
          </div>
          <hr />
        </section>
        <section class="js-section">
          <h3 class="section__title">Fetching views</h3>
          <p>The View class is a part of the Unified\Lithium\Store namespace and provides methods for rendering views.</p>
          <p>
            This function gets the view specified and also gets the components "header", "navbar"
            and "footer".
            <br><code>get($view, $ptitle, $pfavicon)</code> : 
          </p>
          <table>
            <tr>
              <th>Options</th>
              <th>Value</th>
            </tr>
            <tr>
              <td><code>$view</code></td>
              <td> The name of the view file to be rendered, without the file extension.</td>
            </tr>
            <tr>
              <td><code>$ptitle</code></td>
              <td>The title of the page, which will be displayed in the header.</td>
            </tr>
            <tr>
              <td><code>$pfavicon</code></td>
              <td>The URL or path to the favicon. If not provided, a constant value APP_ICON is used.</td>
            </tr>
          </table>
          <p>
            This function gets only the view specified.
            <br><code>bget($view)</code> :
          </p>
          <table>
            <tr>
              <th>Options</th>
              <th>Value</th>
            </tr>
            <tr>
              <td><code>$view</code></td>
              <td> The name of the view file to be rendered, without the file extension.</td>
            </tr>
          </table>
          <p>
            This function returns the path to the specified view file, without actually rendering it.
            <br><code>return($view)</code> :
          </p>
          <table>
            <tr>
              <th>Options</th>
              <th>Value</th>
            </tr>
            <tr>
              <td><code>$view</code></td>
              <td> The name of the view file to be rendered, without the file extension.</td>
            </tr>
          </table>
        </section>
        <section class="js-section">
          <h3 class="section__title">Fetching components</h3>
          <p>
            The View class is a part of the Unified\Lithium\Store namespace and provides methods for including and rendering reusable components.
            These components are semi-required as in you must use these names for their intended use.<br>
            <code>/app/components/header.php</code>: App header.<br>
            <code>/app/components/navbar.php</code>: App navbar.<br>
            <code>/app/components/footer.php</code>: App footer.
          </p>
          <p>
            This function is used to include a specific component.
            <br><code>get($components)</code> : 
          </p>
          <table>
            <tr>
              <th>Options</th>
              <th>Value</th>
            </tr>
            <tr>
              <td><code>$components</code></td>
              <td>The name of the component file to be included, without the file extension.</td>
            </tr>
          </table>
          <p>
            This function is used to include a header component.
            <br><code>header($components, $ptitle, $pfavicon = APP_ICON)</code> : 
          </p>
          <table>
            <tr>
              <th>Options</th>
              <th>Value</th>
            </tr>
            <tr>
              <td><code>$components</code></td>
              <td>The name of the component file to be included, without the file extension.</td>
            </tr>
            <tr>
              <td><code>$ptitle</code></td>
              <td>The title of the page.</td>
            </tr>
            <tr>
              <td><code>$pfavicon</code></td>
              <td>The URL or path to the favicon. If not provided, a constant value APP_ICON is used.</td>
            </tr>
          </table>
        </section>
        <section class="js-section">
          <h3 class="section__title">HTTP</h3>
          <p>Coming soon</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">File Utilities</h3>
          <p>Coming soon</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">String Utilities</h3>
          <p>Coming soon</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">XML file parser</h3>
          <p>Coming soon</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">INI file parser</h3>
          <p>Coming soon</p>
        </section>
      </article>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="/api/getAsset/js/documentation"></script>
  </body>
</html>
