# UPGRADE

### 1.0.0 to 1.1.0

 * The `markers` property of the `Map` have been removed in favor of the `markerCluster` property.
 * The `MapHelper` constructor have been updated to now takes a `MarkerClusterHelperInterface` as 14th arguments
   instead of the `MarkerHelper`.
 * The `markerHelper` property/getter/setter of the `MapHelper` has been removed in favor of the `markerClusterHelper`
   ones.
 * The `MapHelper::renderJsContainerMarkers` method has been removed in favor of the
   `renderJsContainerMarkerCluster` one.
 * The `MapHelper::registerMarkerInfoWindowEvent` method have been moved to the `DefaultMarkerClusterHelper` class and
   has been renamed to `registerInfoWindowEvent`.

### 0.9.1 to 1.0.0

 * The  `Distance`, `Duration`, `TravelMode` & `UnitSystem` which lived in the `Ivory\GoogleMap\Services\Directions`
   namespace have been moved in the `Ivory\GoogleMap\Services\Base` one in order to be shared across services.
 * The `MapHelper` constructor now takes an `ApiHelper` as first argument (all the other parameters have been moved
   forward).

### 0.9.0 to 0.9.1

 * All helpers classes have been refactored in order to generate a JS container by map.
 * The `TemplatingException` has been renamed to `HelperException` to be consistent with the namespace.
