<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Plan-X</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="img/favicons/favicon.ico">
  <link rel="manifest" href="img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="lib/prismjs/prism.css" rel="stylesheet">
  <link href="lib/loaders.css/loaders.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="lib/remodal/remodal.css" rel="stylesheet">
  <link href="lib/remodal/remodal-default-theme.css" rel="stylesheet">
  <link href="lib/owl.carousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/lightbox2/css/lightbox.css" rel="stylesheet">
  <link href="lib/semantic-ui-accordion/accordion.min.css" rel="stylesheet">
  <link href="lib/semantic-ui-transition/transition.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="css/theme.css" rel="stylesheet">
  <link href="css/map-style.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
</head>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main>


    <!-- ============================================-->
    <!-- Preloader ==================================-->
    <div id="preloader">
      <div class="loader"><span></span><span></span><span></span><span></span></div>
    </div>
    <!-- ============================================-->
    <!-- End of Preloader ===========================-->


    <!-- ============================================-->
    <!-- <section> begin ============================-->
        @include('public.home')
    <!-- <section> close ============================-->
    <!-- ============================================-->
        @include('public.about')
        @include('public.service')
        @include('public.portfolio')
        @include('public.siteplans')
        @include('public.faq')
        @include('public.contact')
  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->




  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="lib/prismjs/prism.js"></script>
  <script src="lib/loaders.css/loaders.css.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="lib/remodal/remodal.js"></script>
  <script src="lib/jtap/jquery.tap.js"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script
    src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL"></script>
  <script src="lib/owl.carousel/owl.carousel.js"></script>
  <script src="lib/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="lib/isotope-packery/packery-mode.pkgd.min.js"></script>
  <script src="lib/lightbox2/js/lightbox.js"></script>
  <script src="lib/semantic-ui-accordion/accordion.min.js"></script>
  <script src="lib/semantic-ui-transition/transition.min.js"></script>
  <script src="js/theme.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap"
    async></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"
    integrity="sha512-Gk+uNk8NWN235mIkS6B7/424TsDuPDaoAsUekJCKTWLKP6wlaPv+PBGfO7dbvZeibVPGW+mYidz0vL0XaWwz4w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    const endPoint = 'php/get_details.php'
    function get_data_mapping() {
      $.get(endPoint, { action: 'get_data_mapping' }, function (response) {
        // Handle the response from the server
        updateSVGMap(JSON.parse(response));
      });
    }
    function get_legend_keys() {
      $.get(endPoint, { action: 'get_legend_keys' }, function (response) {
        // Handle the response from the server
        addLegendKeys(JSON.parse(response));
      });
    }
    function get_status_labels() {
      $.get(endPoint, { action: 'get_status_labels' }, function (response) {
        // Handle the response from the server
        addLegendKeys(JSON.parse(response));
      });
    }
    function get_data_mapping_for_id(path) {
      let id = $(path).attr('data-map-id');
      Swal.fire({
        title: 'Loading data...',
        willOpen: function () {
          $('.site-plan').addClass("zoom-svg");
          $('path[data-map-id="' + id + '"]').addClass("highlight-path")
          Swal.showLoading();
          $.get(endPoint, { action: 'get_data_mapping_for_id', id }, function (data) {
            Swal.hideLoading();
            jsonResp = JSON.parse(data);
            const table = jsonToHTMLTable(jsonResp, $(path));
            Swal.update({
              title: jsonResp.title,
              html: table,
              confirmButtonText: 'OK'
            });
          });
        },
        willClose: function () {
          $('.site-plan').removeClass("zoom-svg");
          $('path[data-map-id="' + id + '"]').removeClass("highlight-path");
        }
      });
    }
    function $s(elem) {
      return $(document.createElementNS('http://www.w3.org/2000/svg', elem));
    }
    function getTransformedPathDStr(oldPathDStr, pathTranslX, pathTranslY, scale) {

      // constants to help keep track of the types of SVG commands in the path
      var BOTH_X_AND_Y = 1;
      var JUST_X = 2;
      var JUST_Y = 3;
      var NONE = 4;
      var ELLIPTICAL_ARC = 5;
      var ABSOLUTE = 6;
      var RELATIVE = 7;

      // two parallel arrays, with each element being one component of the
      // "d" attribute of the SVG path, with one component being either
      // an instruction (e.g. "M" for moveto, etc.) or numerical value
      // for either an x or y coordinate
      var oldPathDArr = getArrayOfPathDComponents(oldPathDStr);
      var newPathDArr = [];

      var commandParams, absOrRel, oldPathDComp, newPathDComp;

      // element index
      var idx = 0;

      while (idx < oldPathDArr.length) {
        var oldPathDComp = oldPathDArr[idx];
        if (/^[A-Za-z]$/.test(oldPathDComp)) { // component is a single letter, i.e. an svg path command
          newPathDArr[idx] = oldPathDArr[idx];
          switch (oldPathDComp.toUpperCase()) {
            case "A": // elliptical arc command...the most complicated one
              commandParams = ELLIPTICAL_ARC;
              break;
            case "H": // horizontal line; requires only an x-coordinate
              commandParams = JUST_X;
              break;
            case "V": // vertical line; requires only a y-coordinate
              commandParams = JUST_Y;
              break;
            case "Z": // close the path
              commandParams = NONE;
              break;
            default: // all other commands; all of them require both x and y coordinates
              commandParams = BOTH_X_AND_Y;
          }
          absOrRel = ((oldPathDComp === oldPathDComp.toUpperCase()) ? ABSOLUTE : RELATIVE);
          // lowercase commands are relative, uppercase are absolute
          idx += 1;
        } else { // if the component is not a letter, then it is a numeric value
          var translX, translY;
          if (absOrRel === ABSOLUTE) { // the translation is required for absolute commands...
            translX = pathTranslX;
            translY = pathTranslY;
          } else if (absOrRel === RELATIVE) { // ...but not relative ones
            translX = 0;
            translY = 0;
          }
          switch (commandParams) {
            // figure out which of the numeric values following an svg command
            // are required, and then transform the numeric value(s) from the
            // original path d-attribute and place it in the same location in the
            // array that will eventually become the d-attribute for the new path
            case BOTH_X_AND_Y:
              newPathDArr[idx] = Number(oldPathDArr[idx]) * scale + translX;
              newPathDArr[idx + 1] = Number(oldPathDArr[idx + 1]) * scale + translY;
              idx += 2;
              break;
            case JUST_X:
              newPathDArr[idx] = Number(oldPathDArr[idx]) * scale + translX;
              idx += 1;
              break;
            case JUST_Y:
              newPathDArr[idx] = Number(oldPathDArr[idx]) * scale + translY;
              idx += 1;
              break;
            case ELLIPTICAL_ARC:
              // the elliptical arc has x and y values in the first and second as well as
              // the 6th and 7th positions following the command; the intervening values
              // are not affected by the transformation and so can simply be copied
              newPathDArr[idx] = Number(oldPathDArr[idx]) * scale + translX;
              newPathDArr[idx + 1] = Number(oldPathDArr[idx + 1]) * scale + translY;
              newPathDArr[idx + 2] = Number(oldPathDArr[idx + 2]);
              newPathDArr[idx + 3] = Number(oldPathDArr[idx + 3]);
              newPathDArr[idx + 4] = Number(oldPathDArr[idx + 4]);
              newPathDArr[idx + 5] = Number(oldPathDArr[idx + 5]) * scale + translX;
              newPathDArr[idx + 6] = Number(oldPathDArr[idx + 6]) * scale + translY;
              idx += 7;
              break;
            case NONE:
              throw new Error('numeric value should not follow the SVG Z/z command');
              break;
          }
        }
      }
      return newPathDArr.join(" ");
    }

    // Calculate the transformation, i.e. the translation and scaling, required
    // to get the path to fill the svg area. Note that this assumes uniform
    // scaling, a path that has no other transforms applied to it, and no
    // differences between the svg viewport and viewBox dimensions.
    function getTranslationAndScaling($svgRoot, $path) {
      var svgWdth = $svgRoot.attr("width");
      var svgHght = $svgRoot.attr("height");
      var origPathBoundingBox = $path[0].getBBox();

      var origPathWdth = origPathBoundingBox.width;
      var origPathHght = origPathBoundingBox.height;
      var origPathX = origPathBoundingBox.x;
      var origPathY = origPathBoundingBox.y;

      // how much bigger is the svg root element
      // relative to the path in each dimension?
      var scaleBasedOnWdth = svgWdth / origPathWdth;
      var scaleBasedOnHght = svgHght / origPathHght;

      // of the scaling factors determined in each dimension,
      // use the smaller one; otherwise portions of the path
      // will lie outside the viewport (correct term?)
      var scale = Math.min(scaleBasedOnWdth, scaleBasedOnHght);

      // calculate the bounding box parameters
      // after the path has been scaled relative to the origin
      // but before any subsequent translations have been applied

      var scaledPathX = origPathX * scale;
      var scaledPathY = origPathY * scale;
      var scaledPathWdth = origPathWdth * scale;
      var scaledPathHght = origPathHght * scale;

      // calculate the centre points of the scaled but untranslated path
      // as well as of the svg root element

      var scaledPathCentreX = scaledPathX + (scaledPathWdth / 2);
      var scaledPathCentreY = scaledPathY + (scaledPathHght / 2);
      var svgRootCentreX = 0 + (svgWdth / 2);
      var svgRootCentreY = 0 + (svgHght / 2);

      // calculate translation required to centre the path
      // on the svg root element

      var pathTranslX = svgRootCentreX - scaledPathCentreX;
      var pathTranslY = svgRootCentreY - scaledPathCentreY;

      return { pathTranslX, pathTranslY, scale };
    }
    function getArrayOfPathDComponents(str) {
      // assuming the string from the d-attribute of the path has all components
      // separated by a single space, then create an array of components by
      // simply splitting the string at those spaces
      str = standardizePathDStrFormat(str);
      return str.split(" ");
    }

    function standardizePathDStrFormat(str) {
      // The SVG standard is flexible with respect to how path d-strings are
      // formatted but this makes parsing them more difficult. This function ensures
      // that all SVG path d-string components (i.e. both commands and values) are
      // separated by a single space.
      return str
        .replace(/,/g, " ")  // replace each comma with a space
        .replace(/-/g, " -")  // precede each minus sign with a space
        .replace(/([A-Za-z])/g, " $1 ")  // sandwich each   letter between 2 spaces
        .replace(/  /g, " ")  // collapse repeated spaces to a single space
        .replace(/ ([Ee]) /g, "$1")  // remove flanking spaces around exponent symbols
        .replace(/^ /g, "")  // trim any leading space
        .replace(/ $/g, ""); // trim any tailing space
    }
    function jsonToHTMLTable(json, pathElement) {
      var pathWidth = pathElement[0].getBoundingClientRect().width;
      var pathHeight = pathElement[0].getBoundingClientRect().height;
      var aspectRatio = pathHeight / pathWidth;
      var newSvg = $s('svg').attr({
        width: 100,
        height: 100 * aspectRatio,
        viewBox: '0 0 ' + 100 + ' ' + 100 * aspectRatio
      });
      // Retrieve the "d" attribute of the SVG path you wish to transform.
      var oldPathDStr = pathElement.attr("d");

      // Calculate the transformation required.
      var obj = getTranslationAndScaling(newSvg, pathElement);

      var pathTranslX = obj.pathTranslX;
      var pathTranslY = obj.pathTranslY;
      var scale = obj.scale;

      // The path could be transformed at this point with a simple
      // "transform" attribute as shown here.

      // $path.attr("transform", `translate(${pathTranslX}, ${pathTranslY}), scale(${scale})`);

      // However, as described in your question you didn't want this.
      // Therefore, the code following this line mutates the actual svg path.
      console.log(obj.pathTranslX, obj.pathTranslY, scale);
      // Calculate the path "d" attributes parameters.
      //var newPathDStr = getTransformedPathDStr(oldPathDStr, pathTranslX, pathTranslY, scale);
      newPath = pathElement.clone();
      newPath.attr("transform", `translate(${pathTranslX}, ${pathTranslY}), scale(${scale})`);
      //newPath.attr("d", newPathDStr);
      newSvg.append(newPath);

      var table = $('<table class="table text-start"></table>');
      var tbody = $('<tbody></tbody>');
      var row = $('<tr class="align-middle"></tr>');
      var th = $('<th scope="row">Plot</th>');
      var td = $('<td></td>');
      td.append(newSvg);
      row.append(th);
      row.append(td);
      tbody.append(row);
      for (var key in json) {
        if (json[key] === null) continue;
        row = $('<tr></tr>');
        th = $('<th scope="row">' + key + '</th>');
        td = $('<td>' + json[key] + '</td>');
        row.append(th);
        row.append(td);

        tbody.append(row);
      }
      table.append(tbody);
      return table;
    }
    function addLegendKeys(resp) {
      const legendClassification = $('ul.legend');

      for (let i in resp) {
        if (resp[i].classification_title !== undefined) {
          var newLegendItem = $('<li>').text(resp[i].classification_title);
          newLegendItem.css('border-color', resp[i].classification_color)
        } else {
          var newLegendItem = $('<li>').text(resp[i].status_title);
          newLegendItem.addClass("status");
          newLegendItem.css('border-color', resp[i].status_color);
          newLegendItem.css('color', resp[i].status_color);
        }

        legendClassification.append(newLegendItem);
      }
    }
    function updateSVGMap(resp) {
      for (let i in resp) {
        let id = resp[i].id;
        let strokeColor = resp[i].status_color;
        let fillColor = resp[i].classification_color;
        let pathElement = $('path[data-map-id="' + id + '"]');
        pathElement.css('stroke', strokeColor);
        pathElement.css('fill', fillColor);
        pathElement.attr('data-availability', resp[i].status_title);
      }
    }

    $(document).on('click', 'path[data-availability="available"]', function () {
      get_data_mapping_for_id(this);
    });
    //get_data_mapping();
    //get_status_labels();
    //get_legend_keys();
  </script>
</body>

</html>