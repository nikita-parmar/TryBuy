function[y] = myfunct(image1,image2)
%UNTITLED4 Summary of this function goes here
%   Detailed explanation goes here
model = imread(image1);
user=imread(image2);

% make FaceDetector Object
FaceDetector = vision.CascadeObjectDetector();
FaceDetector.MergeThreshold = 10;

%use FaceDetector object on A and get the faces
BBOX1 = step(FaceDetector, model);
 a=BBOX1(1,1);
 b=BBOX1(1,2);

%Annotate these faces on the top of the images

%imshow(B);

%use FaceDetector object on A and get the faces
face_model = insertObjectAnnotation(model,'rectangle',BBOX1,'Faces');
BBOX2 = step(FaceDetector, user);

%imshow(C),subplot(2,2,2);

p=BBOX2(1,1);
q=BBOX2(1,1)+BBOX2(1,3);
r=BBOX2(1,2);
s=BBOX2(1,2)+BBOX2(1,4);
for i=p:q
    for j=r:s
        p1=impixel(user,i,j);
        model(b,a,:)=p1;
        b=b+1;
    end
    b=BBOX2(1,2);
    a=a+1;
end
imshow(model);
y=model;


end

