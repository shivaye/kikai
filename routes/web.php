<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'SiteController@getIndex');
Route::get('/about-us', 'SiteController@getAboutUs');
Route::get('/contact-us', 'SiteController@getContactUs');
Route::get('/our-team', 'SiteController@getOurTeam');
Route::get('/services', 'SiteController@getServices');






//Authenticate
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function() {

Route::post('/ajaxData', 'Admin\Sitecontroller@getCities');
//For Blogs
Route::get('/blogs-list', 'Admin\BlogController@getBlogsList');
Route::get('/add-blog', 'Admin\BlogController@addBlog');
Route::post('/add-blog-success', 'Admin\BlogController@createBlog');
Route::get('/edit-blog/{id}', 'Admin\BlogController@editBlog');
Route::post('/edit-blog/{id}', 'Admin\BlogController@updateBlog');
Route::get('/blogs-list/{id}', 'Admin\BlogController@deleteBlog');

Route::get('/searched-blogs', 'Admin\BlogController@getSearchedBlog');

//For Events
Route::get('/events-list', 'Admin\EventsController@getEventsList');
Route::get('/add-event', 'Admin\EventsController@addEvent');
Route::post('/add-event-success', 'Admin\EventsController@createEvent');
Route::get('/edit-event/{id}', 'Admin\EventsController@editEvent');
Route::post('/edit-event/{id}', 'Admin\EventsController@updateEvent');
Route::get('/events-delete/{id}', 'Admin\EventsController@deleteEvent');

Route::get('/searched-events', 'Admin\EventsController@getSearchedEvent');

//For FAQS
Route::get('/faqs-list', 'Admin\FaqController@getFaqsList');
Route::get('/add-faq', 'Admin\FaqController@addFaq');
Route::post('/add-faq-success', 'Admin\FaqController@createFaq');
Route::get('/edit-faq/{id}', 'Admin\FaqController@editFaq');
Route::post('/edit-faq/{id}', 'Admin\FaqController@updateFaq');
Route::get('/faqs-list/{id}', 'Admin\FaqController@deleteFaq');

Route::get('/searched-faqs', 'Admin\FaqController@getSearchedFaq');

//For Testimonials
Route::get('/testimonials-list', 'Admin\TestimonialController@getTestimonialsList');
Route::get('/add-testimonial', 'Admin\TestimonialController@addTestimonial');
Route::post('/add-testimonial-success', 'Admin\TestimonialController@createTestimonial');
Route::get('/edit-testimonial/{id}', 'Admin\TestimonialController@editTestimonial');
Route::post('/edit-testimonial/{id}', 'Admin\TestimonialController@updateTestimonial');
Route::get('/testimonials-list/{id}', 'Admin\TestimonialController@deleteTestimonial');

Route::get('/searched-testimonials', 'Admin\TestimonialController@getSearchedTestimonial');

//For Categories
Route::get('/categories-list', 'Admin\CauseController@getCategoriesList');
Route::get('/add-category', 'Admin\CauseController@addCategory');
Route::post('/add-category-success', 'Admin\CauseController@createCategory');
Route::get('/edit-category/{id}', 'Admin\CauseController@editCategory');
Route::post('/edit-category/{id}', 'Admin\CauseController@updateCategory');
Route::get('/categories-list/{id}', 'Admin\CauseController@deleteCategory');

Route::get('/searched-categories', 'Admin\CauseController@getSearchedCategory');

//For Causes
Route::get('/causes-list', 'Admin\CauseController@getCausesList');
Route::get('/add-cause', 'Admin\CauseController@addCause');
Route::post('/add-cause-success', 'Admin\CauseController@createCause');
Route::get('/edit-cause/{id}', 'Admin\CauseController@editCause');
Route::post('/edit-cause/{id}', 'Admin\CauseController@updateCause');
Route::get('/causes-list/{id}', 'Admin\CauseController@deleteCause');

Route::get('/searched-causes', 'Admin\CauseController@getSearchedCause');

//For Images
Route::get('/images-list', 'Admin\ImagesController@getImagesList');
Route::get('/add-image', 'Admin\ImagesController@addImage');
Route::post('/add-image-success', 'Admin\ImagesController@createImage');
Route::get('/edit-image/{id}', 'Admin\ImagesController@editImage');
Route::post('/edit-image/{id}', 'Admin\ImagesController@updateImage');
Route::get('/images-list/{id}', 'Admin\ImagesController@deleteImage');

Route::get('/searched-images', 'Admin\ImagesController@getSearchedImage');

Route::get('/videos-list', 'Admin\ImagesController@getVideosList');
Route::get('/add-video', 'Admin\ImagesController@addVideo');
Route::post('/add-video-success', 'Admin\ImagesController@createVideo');
Route::get('/edit-video/{id}', 'Admin\ImagesController@editVideo');
Route::post('/edit-video/{id}', 'Admin\ImagesController@updateVideo');
Route::get('/videos-list/{id}', 'Admin\ImagesController@deleteVideo');

Route::get('/searched-videos', 'Admin\ImagesController@getSearchedVideo');

//For Team Members
Route::get('/members-list', 'Admin\OurTeamController@getMembersList');
Route::get('/add-member', 'Admin\OurTeamController@addMember');
Route::post('/add-member-success', 'Admin\OurTeamController@createMember');
Route::get('/edit-member/{id}', 'Admin\OurTeamController@editMember');
Route::post('/edit-member/{id}', 'Admin\OurTeamController@updateMember');
Route::get('/members-list/{id}', 'Admin\OurTeamController@deleteMember');

Route::get('/searched-member', 'Admin\OurTeamController@getSearchedMember');

//For Awards & Achievements
Route::get('/awards-list', 'Admin\AwardsController@getAwardsList');
Route::get('/add-award', 'Admin\AwardsController@addAward');
Route::post('/add-award-success', 'Admin\AwardsController@createAward');
Route::get('/edit-award/{id}', 'Admin\AwardsController@editAward');
Route::post('/edit-award/{id}', 'Admin\AwardsController@updateAward');
Route::get('/awards-list/{id}', 'Admin\AwardsController@deleteAward');

Route::get('/searched-awards', 'Admin\AwardsController@getSearchedAward');

//For Projects
Route::get('/projects-list', 'Admin\ProjectController@getProjectsList');
Route::get('/add-project', 'Admin\ProjectController@addProject');
Route::post('/add-project-success', 'Admin\ProjectController@createProject');
Route::get('/edit-project/{id}', 'Admin\ProjectController@editProject');
Route::post('/edit-project/{id}', 'Admin\ProjectController@updateProject');
Route::get('/projects-list/{id}', 'Admin\ProjectController@deleteProject');

Route::get('/searched-projects', 'Admin\ProjectController@getSearchedProject');

//For Services
Route::get('/services-list', 'Admin\ServiceController@getServicesList');
Route::get('/add-service', 'Admin\ServiceController@addService');
Route::post('/add-service-success', 'Admin\ServiceController@createService');
Route::get('/edit-service/{id}', 'Admin\ServiceController@editService');
Route::post('/edit-service/{id}', 'Admin\ServiceController@updateService');
Route::get('/services-list/{id}', 'Admin\ServiceController@deleteService');

Route::get('/searched-services', 'Admin\ServiceController@getSearchedService');


//For Banner
Route::get('/banner-list', 'Admin\BannerController@getBannerList');
Route::get('/add-banner', 'Admin\BannerController@addBanner');
Route::post('/add-banner-success', 'Admin\BannerController@createBanner');
Route::get('/edit-banner/{id}', 'Admin\BannerController@editBanner');
Route::post('/edit-banner/{id}', 'Admin\BannerController@updateBanner');
Route::get('/banner-list/{id}', 'Admin\BannerController@deleteBanner');
Route::get('/searched-services', 'Admin\BannerController@getSearchedBanner');


//For Category
Route::get('/category-list', 'Admin\CategoryController@getCategoryList');
Route::get('/add-category', 'Admin\CategoryController@addCategory');
Route::post('/add-category-success', 'Admin\CategoryController@createCategory');
Route::get('/edit-category/{id}', 'Admin\CategoryController@editCategory');
Route::post('/edit-category/{id}', 'Admin\CategoryController@updateCategory');
Route::get('/category-list/{id}', 'Admin\CategoryController@deleteCategory');
Route::get('/searched-category', 'Admin\CategoryController@getSearchedCategory');

//For SubCategory
Route::get('/subcategory-list', 'Admin\SubCategoryController@getSubCategoryList');
Route::get('/add-subcategory', 'Admin\SubCategoryController@addSubCategory');
Route::post('/add-subcategory-success', 'Admin\SubCategoryController@createSubCategory');
Route::get('/edit-subcategory/{id}', 'Admin\SubCategoryController@editSubCategory');
Route::post('/edit-subcategory/{id}', 'Admin\SubCategoryController@updateSubCategory');
Route::get('/subcategory-list/{id}', 'Admin\SubCategoryController@deleteSubCategory');
Route::get('/searched-subcategory', 'Admin\SubCategoryController@getSearchedSubCategory');


//Other Pages
Route::get('/newsletters-list','Admin\OtherPagesController@getNewslettersList');
Route::get('/searched-newsletters', 'Admin\OtherPagesController@getSearchedNewsletter');
Route::get('/newsletters-list/{id}','Admin\OtherPagesController@deleteNewsletter');

Route::get('/contacts-list','Admin\OtherPagesController@getContactsList');
Route::get('/searched-contacts', 'Admin\OtherPagesController@getSearchedContact');
Route::get('/contatcs-list/{id}','Admin\OtherPagesController@deleteContact');

Route::get('/donations', 'Admin\OtherPagesController@getDonationList');
Route::get('/searched-donations', 'Admin\OtherPagesController@getSearchedDonation');
Route::get('/donations-list/{id}','Admin\OtherPagesController@deleteDonation');

Route::get('/volunteers-list','Admin\OtherPagesController@getVolunteersList');
Route::get('/searched-volunteers', 'Admin\OtherPagesController@getSearchedVolunteer');
Route::get('/volunteers-list/{id}','Admin\OtherPagesController@deleteVolunteer');


Route::get('/pages-list', 'Admin\CmsController@getAll');
Route::get('/edit-content/{id}', 'Admin\CmsController@editContent');
Route::post('/edit-content/{id}', 'Admin\CmsController@updateContent');

Route::get('/sendsms', 'Admin\OtherPagesController@showsendsms');
Route::post('/send-sms', 'Admin\OtherPagesController@sendsms');

});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
