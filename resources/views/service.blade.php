@extends('layout.main4')
@section('content')

    <body class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-1126 wp-custom-logo wp-embed-responsive theme-default elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-1126">

    @extends('layout.loader')

    @extends('layout.menu')

   <div data-elementor-type="wp-post" data-elementor-id="1126" class="elementor elementor-1126">
    <div class="elementor-element elementor-element-bdaea20 e-flex e-con-boxed e-con e-parent" data-id="bdaea20" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">

        <style>
            .elementor-1117 .elementor-element.elementor-element-20cdd7b:not(.elementor-motion-effects-element-type-background),
            .elementor-1117 .elementor-element.elementor-element-20cdd7b > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                background-image: url({{"public/wp-content/uploads/sites/12/2025/03/".$service->image}});
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }


            .elementor-1126 .elementor-element.elementor-element-23e0985:not(.elementor-motion-effects-element-type-background), .elementor-1126 .elementor-element.elementor-element-23e0985 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                background-image: url({{"public/wp-content/uploads/sites/12/2025/03/".$service->image}});
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }


        </style>



        <div class="e-con-inner">
            <div class="elementor-element elementor-element-7dfc53a e-con-full e-flex elementor-invisible e-con e-child" data-id="7dfc53a" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                <div class="elementor-element elementor-element-5d02db3 elementor-widget elementor-widget-heading" data-id="5d02db3" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">{{$service->service}}</h1>				</div>
                </div>

                <div class="elementor-element elementor-element-d3ff7ca elementor-widget elementor-widget-text-editor" data-id="d3ff7ca" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p><a href="/">Home</a> / {{$service->service}}</p>								</div>
                </div>
            </div>
            <div class="elementor-element elementor-element-23e0985 e-con-full elementor-hidden-mobile e-flex e-con e-child" data-id="23e0985" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;}">
                <div class="elementor-element elementor-element-588df55 elementor-widget elementor-widget-spacer" data-id="588df55" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-ff289fe e-flex e-con-boxed e-con e-parent" data-id="ff289fe" data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-f6aa4c5 e-con-full e-flex elementor-invisible e-con e-child" data-id="f6aa4c5" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                <div class="elementor-element elementor-element-b2e9c29 e-con-full e-flex e-con e-child" data-id="b2e9c29" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-element elementor-element-8dab468 elementor-widget elementor-widget-heading" data-id="8dab468" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default">Our Services</h4>				</div>
                    </div>
                    <div class="elementor-element elementor-element-2a87842 elementor-widget elementor-widget-elementskit-blog-posts" data-id="2a87842" data-element_type="widget" data-widget_type="elementskit-blog-posts.default">
                        <div class="elementor-widget-container">
                            <div class="ekit-wid-con" >        <div id="post-items--2a87842" class="row post-items">
                                   @foreach($services as $data)

                                        <div class="col-lg-12 col-md-12">

                                            <div class="elementskit-post-image-card">
                                                <div class="elementskit-entry-header">
                                                    <a href="#" class="elementskit-entry-thumb">
                                                        <img decoding="async" src="{{url('')}}/public/wp-content/uploads/sites/12/2025/03/{{$data->image}}" alt="10 Surprising Facts About Plastic Waste">
                                                    </a>


                                                </div>

                                                <div class="elementskit-post-body ">

                                                    <div class="post-meta-list">

                                                        <span class="meta-date">

									</span>
                                                    </div>


                                                    <h2 class="entry-title">
                                                        <a href="service?id={{$data->id}}">
                                                            {{$data->service}}					</a>
                                                    </h2>
                                                </div>
                                            </div>

                                        </div>


                                    @endforeach


                                </div>
                            </div>				</div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4a8e111 e-con-full e-flex e-con e-child" data-id="4a8e111" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-element elementor-element-3d0a045 elementor-widget elementor-widget-spacer" data-id="3d0a045" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-059b549 elementor-widget elementor-widget-heading" data-id="059b549" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default">Ready to Elevate your Waste Management.</h3>				</div>
                    </div>
                    <div class="elementor-element elementor-element-e42de9e elementor-widget elementor-widget-button" data-id="e42de9e" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-shrink" href="contact-us">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z"></path></svg>			</span>
									<span class="elementor-button-text">Contact Us</span>
					</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-b2f8754 e-con-full e-flex elementor-invisible e-con e-child" data-id="b2f8754" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                <div class="elementor-element elementor-element-373416c elementor-widget elementor-widget-image" data-id="373416c" data-element_type="widget" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img decoding="async" width="800" height="534" src="{{url('')}}/public/wp-content/uploads/sites/12/2025/03/{{$service->image}}" class="attachment-large size-large wp-image-658" alt="" srcset="{{url('')}}/public/wp-content/uploads/sites/12/2025/03/{{$service->image}} 1024w, {{url('')}}/public/wp-content/uploads/sites/12/2025/03/{{$service->image}} 300w, {{url('')}}/public/wp-content/uploads/sites/12/2025/03/{{$service->image}} 768w, {{url('')}}/public/wp-content/uploads/sites/12/2025/03/{{$service->image}} 800w, {{url('')}}/public/wp-content/uploads/sites/12/2025/03/{{$service->image}} 1500w" sizes="(max-width: 800px) 100vw, 800px" />															</div>
                </div>


                <div class="elementor-element elementor-element-ccbfeef elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="ccbfeef" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-deaea5e elementor-widget elementor-widget-heading" data-id="deaea5e" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">{{$service->service}}</h3>				</div>
                </div>

                <div class="elementor-element elementor-element-7a33713 elementor-widget elementor-widget-text-editor" data-id="7a33713" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        {!! $service->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
