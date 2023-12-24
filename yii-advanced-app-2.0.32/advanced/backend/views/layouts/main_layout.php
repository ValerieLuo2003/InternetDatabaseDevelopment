<?php
/**
 * Team: 不想重装队
 * Coding By: 罗梓洋
 * 本文件用于后台框架
 */

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>关注核污染 保护我们的地球 | CRM Admin Dashboard Template</title>
      
      <link rel="stylesheet" href="static/css/backend-plugin.min.css">
      <link rel="stylesheet" href="static/css/backend.css">  <style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}


/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}

.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0, 0, 0, .5);
  box-shadow: 0 0 1px rgba(255, 255, 255, .5);
  -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}


.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}

.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30, 30, 30, 0.8);
}

.apexcharts-tooltip * {
  font-family: inherit;
}


.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}

.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}

.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-y-value,
.apexcharts-tooltip-text-goals-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-y-label:empty,
.apexcharts-tooltip-text-y-value:empty,
.apexcharts-tooltip-text-goals-label:empty,
.apexcharts-tooltip-text-goals-value:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-y-value,
.apexcharts-tooltip-text-goals-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-text-goals-label, 
.apexcharts-tooltip-text-goals-value {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-goals-group, 
.apexcharts-tooltip-text-goals-label, 
.apexcharts-tooltip-text-goals-value {
  display: flex;
}
.apexcharts-tooltip-text-goals-label:not(:empty),
.apexcharts-tooltip-text-goals-value:not(:empty) {
  margin-top: -6px;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}

.apexcharts-tooltip-series-group.apexcharts-active,
.apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}

.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}

.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-box, .apexcharts-custom-tooltip {
  padding: 4px 8px;
}

.apexcharts-tooltip-boxPlot {
  display: flex;
  flex-direction: column-reverse;
}

.apexcharts-tooltip-box>div {
  margin: 4px 0;
}

.apexcharts-tooltip-box span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after,
.apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}

.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after,
.apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after,
.apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}

.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color: #ECEFF1
}

.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after,
.apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}

.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after,
.apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after,
.apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}

.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}

.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}

.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs,
.apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active,
.apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_boundingRect, .svg_select_points_rot {
  pointer-events: none;
  opacity: 0;
  visibility: hidden;
}
.apexcharts-selection-rect + g .svg_select_boundingRect,
.apexcharts-selection-rect + g .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}

.apexcharts-selection-rect + g .svg_select_points_l,
.apexcharts-selection-rect + g .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
}

.svg_select_points {
  fill: #efefef;
  stroke: #333;
  rx: 2;
}

.apexcharts-svg.apexcharts-zoomable.hovering-zoom {
  cursor: crosshair
}

.apexcharts-svg.apexcharts-zoomable.hovering-pan {
  cursor: move
}

.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}

.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}

.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}

.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon,
.apexcharts-menu-icon {
  position: relative;
}

.apexcharts-reset-icon {
  margin-left: 5px;
}

.apexcharts-zoom-icon,
.apexcharts-reset-icon,
.apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}

.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}

.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}

.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}

.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}

.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {
  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels,
.apexcharts-datalabel,
.apexcharts-datalabel-label,
.apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-gridline,
.apexcharts-annotation-rect,
.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line,
.apexcharts-zoom-rect,
.apexcharts-toolbar svg,
.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-radar-series path,
.apexcharts-radar-series polygon {
  pointer-events: none;
}


/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}


/* Resize generated styles */

@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers,
.resize-triggers>div,
.contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers>div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}</style><style id="smooth-scrollbar-style">
[data-scrollbar] {
  display: block;
  position: relative;
}

.scroll-content {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}

.scrollbar-track {
  position: absolute;
  opacity: 0;
  z-index: 1;
  background: rgba(222, 222, 222, .75);
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -webkit-transition: opacity 0.5s 0.5s ease-out;
          transition: opacity 0.5s 0.5s ease-out;
}
.scrollbar-track.show,
.scrollbar-track:hover {
  opacity: 1;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}

.scrollbar-track-x {
  bottom: 0;
  left: 0;
  width: 100%;
  height: 8px;
}
.scrollbar-track-y {
  top: 0;
  right: 0;
  width: 8px;
  height: 100%;
}
.scrollbar-thumb {
  position: absolute;
  top: 0;
  left: 0;
  width: 8px;
  height: 8px;
  background: rgba(0, 0, 0, .5);
  border-radius: 4px;
}
</style></head>












<body class="sidebar-main">
    <!-- loader Start -->
    <div id="loading" style="display: none;">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->








    <div class="wrapper">
      <div class="iq-sidebar  sidebar-default  ">
          <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
               <a href="" class="header-logo">
                  <img src="static/picture/logo-2023.webp" class="img-fluid rounded-normal light-logo" alt="logo">
                  <img src="static/picture/logo-2023-dark.webp" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
                  <span>关注核污染</span>            
              </a>
              <div class="side-menu-bt-sidebar-1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu open" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                  </div>
          </div>


          <div class="data-scrollbar" data-scroll="1" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="side-menu">
                      <li class="active sidebar-layout">
                          <a href="<?php echo Yii::$app->getHomeUrl(); ?>" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">主页</span>
                              <p class="mb-0 w-10 badge badge-pill badge-primary">6</p>
                          </a>
                      </li>
                      <li class="px-3 pt-3 pb-2 ">
                          <span class="text-uppercase small font-weight-bold">团队管理</span>
                      </li>

                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                              <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">团队成员</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=our-team-mems" class="svg-icon">
                                      <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path>
                                      </svg>
                                      </i><span class="">成员展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=our-team-mems%2Fcreate" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                          </svg>
                                      </i><span class="">新建成员</span>
                                  </a>
                              </li>

                          </ul>
                      </li>


                      <li class="px-3 pt-3 pb-2 ">
                          <span class="text-uppercase small font-weight-bold">用户管理</span>
                      </li>

                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                              <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">用户</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=user" class="svg-icon">
                                      <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path>
                                      </svg>
                                      </i><span class="">用户展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=user%2Fcreate" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                          </svg>
                                      </i><span class="">新建用户</span>
                                  </a>
                              </li>

                          </ul>
                      </li>



                      <li class="px-3 pt-3 pb-2 ">
                          <span class="text-uppercase small font-weight-bold">数据管理</span>
                      </li>


                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                            <i class="">
                                  <svg class="svg-icon" id="iq-chart-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" style="stroke-dasharray: 96, 116; stroke-dashoffset: 0;"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">新闻</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=news" class="svg-icon">
                                      <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                      </i><span class="">新闻展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=news%2Fcreate" class="svg-icon">
                                  <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                      </i><span class="">新建新闻</span>
                                  </a>
                              </li>

                          </ul>
                      </li>




                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                            <i class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                              </svg>
                              </i>
                              <span class="ml-2">各界观点</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=comment" class="svg-icon">
                                      <i class="">
                                      <svg class="svg-icon" width="18" id="iq-ui-1-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="{2}" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" style="stroke-dasharray: 72, 92; stroke-dashoffset: 0;"></path>
                                      </svg>
                                      </i><span class="">观点展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=comment%2Fcreate" class="svg-icon">
                                  <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                      </i><span class="">新建评论</span>
                                  </a>
                              </li>

                          </ul>
                      </li>








                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">案例分析</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=casestudy" class="svg-icon">
                                      <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                      </i><span class="">案例展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=casestudy%2Fcreate" class="svg-icon">
                                  <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                      </i><span class="">新建观点</span>
                                  </a>
                              </li>

                          </ul>
                      </li>










                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">影响-生态环境</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=ecological" class="svg-icon">
                                      <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                      </i><span class="">展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=ecological%2Fcreate" class="svg-icon">
                                  <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                      </i><span class="">新建表项</span>
                                  </a>
                              </li>

                          </ul>
                      </li>


                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">影响-国际关系</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=internationalrelation" class="svg-icon">
                                      <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                      </i><span class="">展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=internationalrelation%2Fcreate" class="svg-icon">
                                  <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                      </i><span class="">新建表项</span>
                                  </a>
                              </li>

                          </ul>
                      </li>



                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                            <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">影响-社会经济</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=economics" class="svg-icon">
                                      <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                      </i><span class="">展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=ecological%2Fcreate" class="svg-icon">
                                  <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                      </i><span class="">新建表项</span>
                                  </a>
                              </li>

                          </ul>
                      </li>




                      



                      <li class="px-3 pt-3 pb-2 ">
                          <span class="text-uppercase small font-weight-bold">作业下载</span>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=teamhomework" class="svg-icon ">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">团队作业</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=personhomework" class="svg-icon">
                              <i class="">
                              <svg class="svg-icon" width="18" id="iq-ui-1-14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" style="stroke-dasharray: 90, 110; stroke-dashoffset: 0;"></path>
                                          </svg>
                              </i>
                              <span class="ml-2">个人作业</span>
                          </a>
                      </li>






                </ul>
              </nav>
            <div class="pt-5 pb-5"></div>
          </div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 260px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 1041.77px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
      </div>
       <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="side-menu-bt-sidebar">
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                      </svg>
                  </div>
                  <div class="d-flex align-items-center">
                      <div class="change-mode">
                          <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                              <div class="custom-switch-inner">
                                  <p class="mb-0"> </p>
                                  <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                  <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                      <span class="switch-icon-right">
                                          <svg xmlns="http://www.w3.org/2000/svg" id="h-moon" height="20" width="20" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                          </svg>
                                      </span>
                                      <span class="switch-icon-left">
                                          <svg xmlns="http://www.w3.org/2000/svg" id="h-sun" height="20" width="20" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                          </svg>
                                      </span>
                                  </label>
                              </div>
                          </div>
                      </div>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                          <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                          </svg>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                     
                              <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="static/picture/flag.jpg" class="img-fluid rounded-circle" alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                                  <span class="bg-primary"></span>
                                  </a>
                              </li>

                              <li class="nav-item nav-icon dropdown">
                                  <a href="../../frontend/web">
                                  <span style="font-weight:bold",class="mb-0 ml-2 user-name">进入前台</span>
                                  </a>
                              </li>
                              
                              <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="nav-item nav-icon dropdown-toggle pr-0 search-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <img src="static/picture/1.jpg" class="img-fluid avatar-rounded" alt="user">
                                      <span class="mb-0 ml-2 user-name"><?php echo Yii::$app->user->identity->username ?></span>
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                          </svg>
                                          <a href="<?php echo Yii::$app->getHomeUrl(); ?>">Home</a>
                                      </li>
    

                                      <li class="dropdown-item  d-flex svg-icon border-top">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                          </svg>
                                          <form action="<?php echo Yii::$app->getHomeUrl(); ?>?r=site%2Flogout" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout"> logout</button>
										</form>                                    
                                    </li>
                                  </ul>
                              </li>
                          </ul>                     
                      </div> 
                  </div>
              </nav>
          </div>
      </div>
    <div class="content-page">
        <div class="container-fluid">
        
<div class="row">
            
            <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">


            
                <div class="container">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </div>




            </div>
            
        </div>
            <!-- Page end  -->
        </div>
    </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <!--ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul-->
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1">Copyright &copy; 2023. 不想重装队 All rights reserved.</span>
                </div>
            </div>
        </div>
    </footer>    <!-- Backend Bundle JavaScript -->
    <script src="static/js/backend-bundle.min.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="static/js/customizer.js"></script>
    
    <script src="static/js/sidebar.js"></script>
    
    <!-- Flextree Javascript-->
    <script src="static/js/flex-tree.min.js"></script>
    <script src="static/js/tree.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="static/js/table-treeview.js"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="static/js/sweetalert.js"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="static/js/vector-map-custom.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="static/js/chart-custom.js"></script>
    <script src="static/js/01.js"></script>
    <svg id="SvgjsSvg1170" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1171"></defs><polyline id="SvgjsPolyline1172" points="0,0"></polyline><path id="SvgjsPath1173" d="M-1 262.5L-1 262.5C-1 262.5 163.6153846153846 262.5 163.6153846153846 262.5C163.6153846153846 262.5 272.6923076923077 262.5 272.6923076923077 262.5C272.6923076923077 262.5 381.7692307692308 262.5 381.7692307692308 262.5C381.7692307692308 262.5 490.8461538461538 262.5 490.8461538461538 262.5C490.8461538461538 262.5 599.9230769230769 262.5 599.9230769230769 262.5C599.9230769230769 262.5 709 262.5 709 262.5C709 262.5 709 262.5 709 262.5 "></path></svg><script src="static/js/02.js"></script>
    
    <!-- slider JavaScript -->
    <script src="static/js/slider.js"></script>
    
    <!-- Emoji picker -->
    <script src="static/js/index.js" type="module"></script>
    
    
    <!-- app JavaScript -->
    <script src="static/js/app.js"></script><div class="datepicker datepicker-dropdown datepicker-orient-top datepicker-orient-left" style="top: 104.981px; left: 782.269px;"><div class="datepicker-picker"><div class="datepicker-header"><div class="datepicker-title" style="display: none;"></div><div class="datepicker-controls"><button type="button" class="button prev-btn">«</button><button type="button" class="button view-switch">February 2023</button><button type="button" class="button next-btn">»</button></div></div><div class="datepicker-main"><div class="datepicker-view"><div class="days"><div class="days-of-week"><span class="dow">Su</span><span class="dow">Mo</span><span class="dow">Tu</span><span class="dow">We</span><span class="dow">Th</span><span class="dow">Fr</span><span class="dow">Sa</span></div><div class="datepicker-grid"><span class="datepicker-cell day prev" data-date="1674921600000">29</span><span class="datepicker-cell day prev" data-date="1675008000000">30</span><span class="datepicker-cell day prev" data-date="1675094400000">31</span><span class="datepicker-cell day" data-date="1675180800000">1</span><span class="datepicker-cell day focused" data-date="1675267200000">2</span><span class="datepicker-cell day" data-date="1675353600000">3</span><span class="datepicker-cell day" data-date="1675440000000">4</span><span class="datepicker-cell day" data-date="1675526400000">5</span><span class="datepicker-cell day" data-date="1675612800000">6</span><span class="datepicker-cell day" data-date="1675699200000">7</span><span class="datepicker-cell day" data-date="1675785600000">8</span><span class="datepicker-cell day" data-date="1675872000000">9</span><span class="datepicker-cell day" data-date="1675958400000">10</span><span class="datepicker-cell day" data-date="1676044800000">11</span><span class="datepicker-cell day" data-date="1676131200000">12</span><span class="datepicker-cell day" data-date="1676217600000">13</span><span class="datepicker-cell day" data-date="1676304000000">14</span><span class="datepicker-cell day" data-date="1676390400000">15</span><span class="datepicker-cell day" data-date="1676476800000">16</span><span class="datepicker-cell day" data-date="1676563200000">17</span><span class="datepicker-cell day" data-date="1676649600000">18</span><span class="datepicker-cell day" data-date="1676736000000">19</span><span class="datepicker-cell day" data-date="1676822400000">20</span><span class="datepicker-cell day" data-date="1676908800000">21</span><span class="datepicker-cell day" data-date="1676995200000">22</span><span class="datepicker-cell day" data-date="1677081600000">23</span><span class="datepicker-cell day" data-date="1677168000000">24</span><span class="datepicker-cell day" data-date="1677254400000">25</span><span class="datepicker-cell day" data-date="1677340800000">26</span><span class="datepicker-cell day" data-date="1677427200000">27</span><span class="datepicker-cell day" data-date="1677513600000">28</span><span class="datepicker-cell day next" data-date="1677600000000">1</span><span class="datepicker-cell day next" data-date="1677686400000">2</span><span class="datepicker-cell day next" data-date="1677772800000">3</span><span class="datepicker-cell day next" data-date="1677859200000">4</span><span class="datepicker-cell day next" data-date="1677945600000">5</span><span class="datepicker-cell day next" data-date="1678032000000">6</span><span class="datepicker-cell day next" data-date="1678118400000">7</span><span class="datepicker-cell day next" data-date="1678204800000">8</span><span class="datepicker-cell day next" data-date="1678291200000">9</span><span class="datepicker-cell day next" data-date="1678377600000">10</span><span class="datepicker-cell day next" data-date="1678464000000">11</span></div></div></div></div><div class="datepicker-footer"><div class="datepicker-controls"><button type="button" class="button today-btn" style="display: none;">Today</button><button type="button" class="button clear-btn" style="display: none;">Clear</button></div></div></div></div><div class="datepicker datepicker-dropdown datepicker-orient-top datepicker-orient-left" style="top: 104.981px; left: 1036.42px;"><div class="datepicker-picker"><div class="datepicker-header"><div class="datepicker-title" style="display: none;"></div><div class="datepicker-controls"><button type="button" class="button prev-btn">«</button><button type="button" class="button view-switch">February 2023</button><button type="button" class="button next-btn">»</button></div></div><div class="datepicker-main"><div class="datepicker-view"><div class="days"><div class="days-of-week"><span class="dow">Su</span><span class="dow">Mo</span><span class="dow">Tu</span><span class="dow">We</span><span class="dow">Th</span><span class="dow">Fr</span><span class="dow">Sa</span></div><div class="datepicker-grid"><span class="datepicker-cell day prev" data-date="1674921600000">29</span><span class="datepicker-cell day prev" data-date="1675008000000">30</span><span class="datepicker-cell day prev" data-date="1675094400000">31</span><span class="datepicker-cell day" data-date="1675180800000">1</span><span class="datepicker-cell day focused" data-date="1675267200000">2</span><span class="datepicker-cell day" data-date="1675353600000">3</span><span class="datepicker-cell day" data-date="1675440000000">4</span><span class="datepicker-cell day" data-date="1675526400000">5</span><span class="datepicker-cell day" data-date="1675612800000">6</span><span class="datepicker-cell day" data-date="1675699200000">7</span><span class="datepicker-cell day" data-date="1675785600000">8</span><span class="datepicker-cell day" data-date="1675872000000">9</span><span class="datepicker-cell day" data-date="1675958400000">10</span><span class="datepicker-cell day" data-date="1676044800000">11</span><span class="datepicker-cell day" data-date="1676131200000">12</span><span class="datepicker-cell day" data-date="1676217600000">13</span><span class="datepicker-cell day" data-date="1676304000000">14</span><span class="datepicker-cell day" data-date="1676390400000">15</span><span class="datepicker-cell day" data-date="1676476800000">16</span><span class="datepicker-cell day" data-date="1676563200000">17</span><span class="datepicker-cell day" data-date="1676649600000">18</span><span class="datepicker-cell day" data-date="1676736000000">19</span><span class="datepicker-cell day" data-date="1676822400000">20</span><span class="datepicker-cell day" data-date="1676908800000">21</span><span class="datepicker-cell day" data-date="1676995200000">22</span><span class="datepicker-cell day" data-date="1677081600000">23</span><span class="datepicker-cell day" data-date="1677168000000">24</span><span class="datepicker-cell day" data-date="1677254400000">25</span><span class="datepicker-cell day" data-date="1677340800000">26</span><span class="datepicker-cell day" data-date="1677427200000">27</span><span class="datepicker-cell day" data-date="1677513600000">28</span><span class="datepicker-cell day next" data-date="1677600000000">1</span><span class="datepicker-cell day next" data-date="1677686400000">2</span><span class="datepicker-cell day next" data-date="1677772800000">3</span><span class="datepicker-cell day next" data-date="1677859200000">4</span><span class="datepicker-cell day next" data-date="1677945600000">5</span><span class="datepicker-cell day next" data-date="1678032000000">6</span><span class="datepicker-cell day next" data-date="1678118400000">7</span><span class="datepicker-cell day next" data-date="1678204800000">8</span><span class="datepicker-cell day next" data-date="1678291200000">9</span><span class="datepicker-cell day next" data-date="1678377600000">10</span><span class="datepicker-cell day next" data-date="1678464000000">11</span></div></div></div></div><div class="datepicker-footer"><div class="datepicker-controls"><button type="button" class="button today-btn" style="display: none;">Today</button><button type="button" class="button clear-btn" style="display: none;">Clear</button></div></div></div></div>  
</body>












</html>
<?php $this->endPage() ?>