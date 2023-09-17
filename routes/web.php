<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/**********************************************************************************
 * ********************************************************************************
 * ***************************** admin-side ***************************************
 * ********************************************************************************/

 Route::get('/admin/login',[AdminController::class,'login'])->name('login');
 Route::post('/admin/dologin',[AdminController::class,'doLogin'])->name('dologin');

 Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('/admin/logout',[AdminController::class,'logOut'])->name('logout');
    Route::get('/admin/home',[AdminController::class,'adminHome'])->name('admin.home');

    Route::get('/admin/gallery',[AdminController::class,'gallery'])->name('admin.gallery');
    Route::post('/admin/gallery/save',[AdminController::class,'gallerySave'])->name('admin.gallery.save');
    Route::get('/admin/gallery/table',[AdminController::class,'galleryTable'])->name('admin.gallery.table');
    Route::get('/admin/gallery/edit/{id}',[AdminController::class,'galleryEdit'])->name('admin.gallery.edit');
    Route::post('/admin/gallery/update',[AdminController::class,'galleryUpdate'])->name('admin.gallery.update');
    Route::get('/admin/gallery/delete/{id}',[AdminController::class,'galleryDelete'])->name('admin.gallery.delete');

    Route::get('/admin/contact',[AdminController::class,'AdminContact'])->name('admin.contact');

    Route::get('/admin/blog',[AdminController::class,'AdminBlog'])->name('admin.blog');
    Route::post('/admin/blog/save',[AdminController::class,'AdminBlogSave'])->name('admin.blog.save');
    Route::get('/admin/blog/table',[AdminController::class,'AdminBlogTable'])->name('admin.blog.table');
    Route::get('/admin/blog/edit/{id}',[AdminController::class,'AdminBlogEdit'])->name('admin.blog.edit');
    Route::post('/admin/blog/update',[AdminController::class,'AdminBlogUpdate'])->name('admin.blog.update');
    Route::get('/admin/blog/delete/{id}',[AdminController::class,'AdminBlogDelete'])->name('admin.blog.delete');

    Route::get('/admin/about-us',[AdminController::class,'AboutUs'])->name('admin.aboutus');
    Route::post('/admin/about-us/save',[AdminController::class,'AboutUsSave'])->name('admin.aboutus.save');
    Route::get('/admin/about-us/table',[AdminController::class,'AboutUsTable'])->name('admin.aboutus.table');
    Route::get('/admin/about-us/edit/{id}',[AdminController::class,'AboutUsEdit'])->name('admin.aboutus.edit');
    Route::post('/admin/about-us/update',[AdminController::class,'AboutUsUpdate'])->name('admin.aboutus.update');
    Route::get('/admin/about-us/delete/{id}',[AdminController::class,'AboutUsDelete'])->name('admin.aboutus.delete');

    Route::get('/admin/portfolio/table',[AdminController::class,'PortFolioTable'])->name('admin.portfolio.table');
    Route::get('/admin/portfolio',[AdminController::class,'PortFolio'])->name('admin.portfolio');
    Route::get('/admin/portfolio/edit/{id}',[AdminController::class,'PortFolioEdit'])->name('admin.portfolio.edit');
    Route::post('/admin/portfolio/update',[AdminController::class,'PortFolioUpdate'])->name('admin.portfolio.update');
    Route::get('/admin/portfolio/delete/{id}',[AdminController::class,'PortFolioDelete'])->name('admin.portfolio.delete');
    Route::post('/admin/portfolio/save',[AdminController::class,'PortFolioSave'])->name('admin.portfolio.save');

    Route::get('/admin/career/table',[AdminController::class,'CareerTable'])->name('admin.career.table');
    Route::get('/admin/career/form',[AdminController::class,'CareerForm'])->name('admin.career.form');
    Route::post('/admin/career/save',[AdminController::class,'CareerSave'])->name('admin.career.save');  
    Route::get('/admin/career/edit/{id}',[AdminController::class,'CareerEdit'])->name('admin.career.edit');
    Route::post('/admin/career/update',[AdminController::class,'CareerUpdate'])->name('admin.career.update');
    Route::get('/admin/career/delete/{id}',[AdminController::class,'CareerDelete'])->name('admin.career.delete');

    Route::get('/admin/our-service/table',[AdminController::class,'OurServiceTable'])->name('admin.our-service.table');
    Route::get('/admin/our-service/form',[AdminController::class,'OurServiceForm'])->name('admin.our-service.form');
    Route::post('/admin/our-service/save',[AdminController::class,'OurServiceSave'])->name('admin.our-service.save');
    Route::get('/admin/our-service/edit/{id}',[AdminController::class,'OurServiceEdit'])->name('admin.our-service.edit');
    Route::post('/admin/our-service/update',[AdminController::class,'OurServiceUpdate'])->name('admin.our-service.update');
    Route::get('/admin/our-service/delete/{id}',[AdminController::class,'OurServiceDelete'])->name('admin.our-service.delete');

    Route::get('/admin/works/table',[AdminController::class,'WorksTable'])->name('admin.work.table');
    Route::get('/admin/works/form',[AdminController::class,'WorksForm'])->name('admin.work.form');
    Route::post('/admin/works/save',[AdminController::class,'WorksSave'])->name('admin.work.save');
    Route::get('/admin/works/edit/{id}',[AdminController::class,'WorksEdit'])->name('admin.work.edit');
    Route::post('/admin/works/update',[AdminController::class,'WorksUpdate'])->name('admin.work.update');
    Route::get('/admin/works/delete/{id}',[AdminController::class,'WorksDelete'])->name('admin.work.delete');

    Route::get('/admin/testiminial',[AdminController::class,'Testimonial'])->name('admin.testimonial');
    Route::get('/admin/testiminial/form',[AdminController::class,'TestimonialForm'])->name('admin.testimonial.form');
    Route::post('/admin/testiminial/save',[AdminController::class,'TestimonialSave'])->name('admin.testimonial.save');
    Route::get('/admin/testiminial/edit/{id}',[AdminController::class,'TestimonialEdit'])->name('admin.testimonial.edit');
    Route::post('/admin/testiminial/update',[AdminController::class,'TestimonialUpdate'])->name('admin.testimonial.update');
    Route::get('/admin/testiminial/destroy/{id}',[AdminController::class,'TestimonialDestroy'])->name('admin.testimonial.destroy');

 });




/**********************************************************************************
 * ********************************************************************************
 * ***************************** client-side **************************************
 * ********************************************************************************/


Route::get('/',[HomeController::class,'Index'])->name('home');
Route::get('/about-us',[HomeController::class,'AboutUs'])->name('aboutus');
Route::get('/services',[HomeController::class,'Services'])->name('services');
Route::get('/careers',[HomeController::class,'Careers'])->name('careers');

Route::get('/blog',[HomeController::class,'Blog'])->name('blog');
Route::get('/blog-detail/{id}',[HomeController::class,'BlogDetail'])->name('blogdetail');

Route::get('/gallery',[HomeController::class,'Gallery'])->name('gallery');

Route::get('/contact-us',[HomeController::class,'ContactUs'])->name('contactus');
Route::post('/contact-us/save',[HomeController::class,'ContactUsSave'])->name('contactus.save');

Route::get('/portfolio',[HomeController::class,'PortFolio'])->name('portfolio');    

Route::get('/cancelation',[HomeController::class,'Cancelation']);    
Route::get('/terms-condition',[HomeController::class,'TermsCondition']);    
Route::get('/privacy-policy',[HomeController::class,'PrivacyPolicy']);    
Route::get('/support',[HomeController::class,'Support']);    








