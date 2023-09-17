<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Career;
use App\Models\ContactUs;
use App\Models\Gallery;
use App\Models\PortFolio;
use App\Http\Controllers\timestamps;
use App\Models\OurService;
use App\Models\Testimonial;
use App\Models\Work;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function adminHome()
    {
        return view('admin.adminhome');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function doLogin()
    {
        $input = ['username' => request('username'), 'password' => request('password')];
        if (auth()->attempt($input, true)) {
            return redirect()->route('admin.home')->with('message', 'Login Success');
        } else {
            return redirect()->route('login')->with('message', 'username or password invalid');
        }
    }

    public function logOut()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function gallery()
    {
        return view('admin.gallery');
    }

    public function gallerySave()
    {
        request()->validate([
            'image' => 'required|image|dimensions:min_width=640,min_height=640,max_width=640,max_height=640',
            'type' => 'required'
        ]);

        $input = [
            'type' => request('type')
        ];

        $file_image = request('image');
        $extension = $file_image->extension();
        $file_Name = 'photo_gallery_' . time() . '.' . $extension;
        $file_image->move(public_path() . '/gallery_images/', $file_Name);

        $input['image'] = $file_Name;

        Gallery::insert($input);

        return redirect()->route('admin.gallery.table')->with('message', 'Gallery Inserted Successfully');
    }

    public function galleryTable()
    {
        $datas = Gallery::all();
        return view('admin.gallery_table', compact('datas'));
    }

    public function galleryEdit($id)
    {
        $data = gallery::find($id);
        return view('admin.gallery_edit', compact('data'));
    }

    public function galleryUpdate()
    {
        $id = request('id');
        $data = Gallery::find($id);
        $input = [

            'type' => request('type'),

        ];

        if (request()->hasFile('image')) {
            $file_image = request('image');
            $extension = $file_image->extension();
            $file_Name = 'photo_gallery_' . time() . '.' . $extension;
            $file_image->move(public_path() . '/gallery_images/', $file_Name);

            $input['image'] = $file_Name;
        }
        $data->update($input);



        return redirect()->route('admin.gallery.table')->with('message', 'Gallery Updated Succesfully!!');
    }

    public function galleryDelete($id)
    {
        $data = Gallery::find($id);
        $data->delete();

        return redirect()->route('admin.gallery.table')->with('message', 'Gallery Deleted Succesfully!!');
    }

    public function AdminContact()
    {
        $datas = ContactUs::all();
        return view('admin.contact_us', compact('datas'));
    }

    public function AdminBlog()
    {
        return view('admin.blog');
    }

    public function AdminBlogTable()
    {
        $datas = Blog::all();
        return view('admin.blog_table', compact('datas'));
    }



    public function AdminBlogSave()
    {
        request()->validate([
            'image' => 'required',
            'subject' => 'required',
            'description' => 'required'
        ]);

        $input = [
            'subject' => request('subject'),
            'description' => request('description')
        ];

        $file_image = request('image');
        $extension = $file_image->extension();
        $file_Name = 'photo_blog_' . time() . '.' . $extension;
        $file_image->move(public_path() . '/blog_images/', $file_Name);

        $input['image'] = $file_Name;

        Blog::insert($input);

        return redirect()->route('admin.blog.table')->with('message', 'Blog Inserted successfully');
    }

    public function AdminBlogEdit($id)
    {
        $data = Blog::find($id);
        return view('admin.blog_edit', compact('data'));
    }

    public function AdminBlogUpdate()
    {
        $id = request('id');
        $data = Blog::find($id);
        $input = [

            'subject' => request('subject'),
            'description' => request('description')

        ];

        if (request()->hasFile('image')) {
            $file_image = request('image');
            $extension = $file_image->extension();
            $file_Name = 'photo_blog_' . time() . '.' . $extension;
            $file_image->move(public_path() . '/blog_images/', $file_Name);

            $input['image'] = $file_Name;
        }

        $data->update($input);


        return redirect()->route('admin.blog.table')->with('message', 'Blog Updated Succesfully!!');
    }

    public function AdminBlogDelete($id)
    {
        $data = Blog::find($id);
        $data->delete();

        return redirect()->route('admin.blog.table')->with('message', 'Blog Deleted Succesfully!!');
    }

    public function AboutUs()
    {
        return view('admin.about_us');
    }

    public function AboutUsSave()
    {
        request()->validate([
            'image' => 'required',
            'name' => 'required',
            'profession' => 'required',
            'description' => 'required'
        ]);

        $input = [
            'name' => request('name'),
            'profession' => request('profession'),
            'description' => request('description'),
            'linkedin' => request('linkedin'),
            'facebook' => request('facebook'),
            'twitter' => request('twitter'),
            'instagram' => request('instagram')
        ];

        $file_image = request('image');
        $extension = $file_image->extension();
        $file_Name = 'photo_aboutus_' . time() . '.' . $extension;
        $file_image->move(public_path() . '/aboutus_images/', $file_Name);

        $input['image'] = $file_Name;

        AboutUs::insert($input);

        return redirect()->route('admin.aboutus.table')->with('message', 'Aboutus Inserted successfully');
    }

    public function AboutUsTable()
    {
        $datas = AboutUs::all();
        return view('admin.aboutus_table', compact('datas'));
    }

    public function AboutUsEdit($id)
    {
        $data = AboutUs::find($id);
        return view('admin.aboutus_edit', compact('data'));
    }

    public function AboutUsUpdate()
    {
        $id = request('id');

        $data = AboutUs::find($id);
        $input = [

            'name' => request('name'),
            'profession' => request('profession'),
            'description' => request('description'),
            'linkedin' => request('linkedin'),
            'facebook' => request('facebook'),
            'twitter' => request('twitter'),
            'instagram' => request('instagram'),

        ];

        if (request()->hasFile('image')) {
            $file_image = request('image');
            $extension = $file_image->extension();
            $file_Name = 'photo_aboutus_' . time() . '.' . $extension;
            $file_image->move(public_path() . '/aboutus_images/', $file_Name);

            $input['image'] = $file_Name;
        }

        $data->update($input);

        return redirect()->route('admin.aboutus.table')->with('message', 'Aboutus Updated Succesfully!!');
    }

    public function AboutUsDelete($id)
    {
        $data = AboutUs::find($id);
        $data->delete();
        return redirect()->route('admin.aboutus.table')->with('message', 'Aboutus Deleted Successfully');
    }

    public function PortFolioTable()
    {
        $datas = PortFolio::all();
        return view('admin.portfolio_table', compact('datas'));
    }

    public function PortFolio()
    {
        return view('admin.port_folio');
    }

    public function PortFolioEdit($id)
    {
        $data = PortFolio::find($id);
        return view('admin.portfolio_edit', compact('data'));
    }

    public function PortFolioUpdate()
    {
        $id = request('id');
        $data = PortFolio::find($id);
        $input = [

            'project_name' => request('project_name'),
            'campany_name' => request('campany_name'),
            'description' => request('description'),
            'campany_url' => request('campany_url'),

        ];

        if (request()->hasFile('image')) {
            $file_image = request('image');
            $extension = $file_image->extension();
            $file_Name = 'photo_portfolio_image_' . time() . '.' . $extension;
            $file_image->move(public_path() . '/portfolio_images/', $file_Name);

            $input['image'] = $file_Name;
        }

        if (request()->hasFile('logo')) {
            $file_logo = request('logo');
            $extension = $file_logo->extension();
            $file_Name = 'photo_portfolio_logo_' . time() . '.' . $extension;
            $file_logo->move(public_path() . '/portfolio_images/', $file_Name);

            $input['logo'] = $file_Name;
        }

        $data->update($input);

        return redirect()->route('admin.portfolio.table')->with('message', 'Portfolio Updated Succesfully!!');
    }

    public function PortFolioDelete($id)
    {
        $data = PortFolio::find($id);
        $data->delete();

        return redirect()->route('admin.portfolio.table')->with('message', 'Portfolio Deleted Succesfully!!');
    }

    public function PortFolioSave()
    {
        request()->validate([

            'image' => 'required',
            'project_name' => 'required',
            'campany_name' => 'required',
            'description' => 'required',
            'campany_url' => 'required',
        ]);

        $input = [
            'project_name' => request('project_name'),
            'campany_name' => request('campany_name'),
            'description' => request('description'),
            'campany_url' => request('campany_url')
        ];

        $file_image = request('image');
        $extension = $file_image->extension();
        $file_Name = 'photo_portfolio_' . time() . '.' . $extension;
        $file_image->move(public_path() . '/portfolio_images/', $file_Name);

        $input['image'] = $file_Name;


        $file_image = request('logo');
        $extension = $file_image->extension();
        $file_Name = 'photo_portfolio_logo' . time() . '.' . $extension;
        $file_image->move(public_path() . '/portfolio_images/', $file_Name);


        $input['logo'] = $file_Name;


        PortFolio::insert($input);

        return redirect()->route('admin.portfolio.table')->with('message', 'Portfolio Inserted successfully');
    }

    public function CareerTable()
    {
        $datas = Career::all();
        return view('admin.career_table', compact('datas'));
    }

    public function CareerForm()
    {

        return view('admin.careers');
    }

    public function CareerSave()
    {
        request()->validate([

            'image' => 'required',
            'post_name' => 'required',
            'vacancies' => 'required',
            'experience' => 'required',
            'worktype' => 'required',
            'url' => 'required',

        ]);

        $input = [
            'post_name' => request('post_name'),
            'no_vacancies' => request('vacancies'),
            'experience' => request('experience'),
            'work_type' => request('worktype'),
            'url' => request('url')
        ];

        $file_image = request('image');
        $extension = $file_image->extension();
        $file_Name = 'photo_careers_' . time() . '.' . $extension;
        $file_image->move(public_path() . '/careers_images/', $file_Name);

        $input['image'] = $file_Name;



        Career::create($input);

        return redirect()->route('admin.career.table')->with('message', 'Career Inserted successfully');
    }

    public function CareerEdit($id)
    {
        $data = Career::find($id);
        return view('admin.career_edit', compact('data'));
    }

    public function CareerUpdate()
    {
        $id = request('id');
        $data = Career::find($id);
        $input = [

            'post_name' => request('post_name'),
            'no_vacancies' => request('vacancies'),
            'experience' => request('experience'),
            'work_type' => request('worktype'),
            'url' => request('url')

        ];

        if (request()->hasFile('image')) {
            $file_image = request('image');
            $extension = $file_image->extension();
            $file_Name = 'photo_careers__' . time() . '.' . $extension;
            $file_image->move(public_path() . '/careers_images/', $file_Name);

            $input['image'] = $file_Name;
        }

        $data->update($input);

        return redirect()->route('admin.career.table')->with('message', 'Career Updated Succesfully!!');
    }

    public function CareerDelete($id)
    {
        $data = Career::find($id);
        $data->delete();

        return redirect()->route('admin.career.table')->with('message', 'Career Deleted Succesfully!!');
    }

    public function OurServiceTable()
    {
        $datas = OurService::all();
        return view('admin.our_service_table', compact('datas'));
    }

    public function OurServiceForm()
    {
        return view('admin.our_service');
    }

    public function OurServiceSave()
    {
        request()->validate([

            'image' => 'required',
            'service_name' => 'required',
            'description' => 'required'
        ]);

        $input = [
            'service_name' => request('service_name'),
            'description' => request('description')
        ];

        $file_image = request('image');
        $extension = $file_image->extension();
        $file_Name = 'photo_our-services_' . time() . '.' . $extension;
        $file_image->move(public_path() . '/our_services_images/', $file_Name);

        $input['image'] = $file_Name;



        OurService::create($input);

        return redirect()->route('admin.our-service.table')->with('message', 'Service Inserted successfully');
    }

    public function OurServiceEdit($id)
    {
        $data = OurService::find($id);
        return view('admin.our_service_edit', compact('data'));
    }

    public function OurServiceUpdate()
    {
        $id = request('id');
        $data = OurService::find($id);
        $input = [

            'service_name' => request('service_name'),
            'description' => request('description')

        ];

        if (request()->hasFile('image')) {
            $file_image = request('image');
            $extension = $file_image->extension();
            $file_Name = 'photo_our-services_' . time() . '.' . $extension;
            $file_image->move(public_path() . '/our_services_images/', $file_Name);

            $input['image'] = $file_Name;
        }

        $data->update($input);

        return redirect()->route('admin.our-service.table')->with('message', 'Service Updated Succesfully!!');
    }

    public function OurServiceDelete($id)
    {
        $data = OurService::find($id);
        $data->delete();

        return redirect()->route('admin.our-service.table')->with('message', 'Service Deleted successfully');
    }

    public function WorksTable()
    {
        $datas = Work::all();
        return view('admin.works_table', compact('datas'));
    }

    public function WorksForm()
    {
        return view('admin.works_form');
    }

    public function WorksSave()
    {
        request()->validate([

            'image' => 'required',
            'project_name' => 'required',
            'description' => 'required'
        ]);

        $input = [
            'project_name' => request('project_name'),
            'description' => request('description')
        ];

        $file_image = request('image');
        $extension = $file_image->extension();
        $file_Name = 'photo_works_' . time() . '.' . $extension;
        $file_image->move(public_path() . '/projets_works_images/', $file_Name);

        $input['image'] = $file_Name;



        Work::create($input);

        return redirect()->route('admin.work.table')->with('message', 'Project or Work Inserted successfully');
    }

    public function WorksEdit($id)
    {
        $data = Work::find($id);
        return view('admin.works_edit', compact('data'));
    }

    public function WorksUpdate()
    {
        $id = request('id');
        $data = Work::find($id);
        $input = [

            'project_name' => request('project_name'),
            'description' => request('description')

        ];

        if (request()->hasFile('image')) {
            $file_image = request('image');
            $extension = $file_image->extension();
            $file_Name = 'photo_works_' . time() . '.' . $extension;
            $file_image->move(public_path() . '/projets_works_images/', $file_Name);

            $input['image'] = $file_Name;
        }

        $data->update($input);

        return redirect()->route('admin.work.table')->with('message', 'Projects or Work Updated Succesfully!!');
    }

    public function WorksDelete($id)
    {
        $data = Work::find($id);
        $data->delete();

        return redirect()->route('admin.work.table')->with('message', 'Projects or Work Deleted Succesfully!!');
    }


    public function Testimonial()
    {
        $datas = Testimonial::all();
        return view('admin.testimonial', compact('datas'));
    }

    public function TestimonialForm()
    {
        return view('admin.testimonial_form');
    }

    public function TestimonialSave(Request $request)
    {
        $request->validate([
            'client' => 'required',
            'project' => 'required',
            'comments' => 'required',
            'rating' => 'required'
        ]);


        Testimonial::create([

            'comments' => $request->comments,
            'client' => $request->client,
            'project' => $request->project,
            'rating' => $request->rating
        ]);

        return Redirect()->route('admin.testimonial')->with('message', 'Testimonial Added Succesfully..!!');
    }

    public function TestimonialEdit($id)
    {
        $data = Testimonial::find($id);
        return view('admin.testimonial_edit', compact('data'));
    }


    public function TestimonialUpdate(Request $request)
    {
        $request->validate([
            'client' => 'required',
            'project' => 'required',
            'comments' => 'required',
            'rating' => 'required'
        ]);

        $id = $request->id;
        $data = Testimonial::find($id);
        $data->update([
            'comments' => $request->comments,
            'client' => $request->client,
            'project' => $request->project,
            'rating' => $request->rating
        ]);

        return redirect()->route('admin.testimonial')->with('message','Testimonial Updated Succesfuly..!!');
    }

    public function TestimonialDestroy($id)
    {
       $data=Testimonial::find($id);
       $data->delete();

       return redirect()->route('admin.testimonial')->with('message','Testimonial Deleted Succesfuly..!!');
    }
}
